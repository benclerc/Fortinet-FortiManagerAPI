<?php

/**
 * PHP library used for interacting with Fortinet firewall manager (FortiManager) API.
 * @author Benjamin Clerc <contact@benjamin-clerc.com>
 * @copyright Copyright (c) 2021, Benjamin Clerc.
 * @license MIT
 * @link https://github.com/benclerc/Fortinet-FortiManagerAPI
 */

namespace Fortinet\FortiManagerAPI;

use Exception;
use stdClass;

/**
 * FortiManager API
 * @property Config $config Config object with all needed information.
 * @property string $session Authentication token kept in cache.
 * @property int|null $transaction Ongoning transaction ID.
 * WARNING : When going through the method prepareRequestData(), all upper case letter in function parameter name will be replaced by '-' and ;brought down to lower case. If you modify or add new endpoints replace all '-' in parameter name by the next letter in uppercase.
 * @link https://fndn.fortinet.net/ Fortinet developer ressource center.
 */
class FortiManagerAPI
{
	private Config $config;
	private string $session = '';
	private $transaction;


	/**
	 * Constructor takes care of checking and registering FortiManager's data and login to the API
	 * @param Config $config Object containing all necessary configuration.
	 */
	public function __construct(Config $config)
	{
		// Save configuration information
		$this->config = $config;
		// Login
		$this->login();
	}


	/**
	 * Destructor takes care of logout.
	 */
	public function __destruct()
	{
		$this->logout();
	}


	/**
	 * Method to request the FortiManager's API.
	 * @param  string $method API method for the request. Must be one of those : get, add, set, update, delete, move, clone, exec.
	 * @param  string $endpoint API endpoint without the first element ('jsonrpc') and with data in the path not replaced. E.g. /pm/config/adom/{adom}/obj/firewall/address.
	 * @param  stdClass|array $pathData Data to be passed in the request path.
	 * @param  stdClass|array $bodyData Params to be passed in the request body.
	 * @return stdClass Return FortiManager's response as a stdClass.
	 */
	protected function curlRequest(
		string $method,
		string $endpoint,
		$pathData = null,
		$bodyData = null,
		int $timeout = null
	) : stdClass {
		// Check if passed method is correct
		if (!in_array($method, ['get', 'add', 'set', 'update', 'delete', 'move', 'clone', 'exec'])) {
			throw new Exception('curlRequest() called by '.debug_backtrace()[1]['function'].'() : Wrong method passed.');
		}

		// Init CURL
		$ch = curl_init();

		// If set, replace the values which must appear in the endpoint path
		if (!empty($pathData)) {
			foreach ($pathData as $key => $value) {
				$endpoint = str_replace('{'.$key.'}', $value, $endpoint);
			}
		}

		// Forge URL
		$url = 'https://'.$this->config->getHostname().'/jsonrpc';

		// Create request body
		$body = new stdClass;
		$body->method = $method;

		// Create request body params
		$bodyParams = new stdClass;
		$bodyParams->url = $endpoint;
		// Add data passed by the method if set
		if (!empty($bodyData)) {
			if (is_array($bodyData)) {
				(object) $bodyData;
			}
			$bodyParams->data = $bodyData;
		}
		$body->params[] = $bodyParams;

		// If set, add session key
		if (!empty($this->session)) {
			$body->session = $this->session;
		}

		// Add body data in request
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));

		// Set CURL options (URL, method used, return response in variable, data if exists and timeout)
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $this->config->getSSLVerifyPeer());
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $this->config->getSSLVerifyHost());
		$curlTimeout = (empty($timeout)) ? $this->config->getTimeout() : $timeout;
		curl_setopt($ch, CURLOPT_TIMEOUT_MS, $curlTimeout);

		// Create the array of headers and fill it
		$headers = array();
		// Misc
		$headers[] = 'Content-Type: application/json';
		$headers[] = 'accept: application/json';
		// Set headers in curl request
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		// Execute CURL
		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			throw new Exception('curlRequest() called by '.debug_backtrace()[1]['function'].'() : Curl error : '.curl_error($ch));
		}
		// Close CURL
		curl_close ($ch);

		// Decode response
		$resultJSON = json_decode($result);
		if (json_last_error() === JSON_ERROR_NONE) {
			if ($resultJSON->result[0]->status->code !== 0) {
				$message = 'curlRequest() called by '.debug_backtrace()[1]['function'].'() : Error (code '.$resultJSON->result[0]->status->code.')';
				$message .= (!empty($resultJSON->result[0]->status->message)) ? ', details : '.$resultJSON->result[0]->status->message.'.' : '.';
				throw new Exception($message);
			}
			return $resultJSON;
		} else {
			throw new Exception('curlRequest() called by '.debug_backtrace()[1]['function'].'() : Curl response is not JSON as expected.');
		}
	}


	/**
	 * Login in the FortiManager.
	 * @return bool Return TRUE if successful or throw Exception if fails.
	 */
	private function login() : bool
	{
		// Create and fill the body object
		$data = new stdClass;
		$data->user = $this->config->getUsername();
		$data->passwd = $this->config->getPassword();

		// Login
		$res = $this->curlRequest('exec', '/sys/login/user', NULL, $data);

		// Check if login is sucessful
		if (!empty($res->session)) {
			$this->session = $res->session;
			return TRUE;
		} else {
			throw new Exception('login() : Login failed.');
		}
	}


	/**
	 * Logout from the FortiManager.
	 * @return Return TRUE if successful, FALSE if it failed.
	 */
	private function logout() : bool
	{
		$this->curlRequest('exec', '/sys/logout');
		return TRUE;
	}
}
