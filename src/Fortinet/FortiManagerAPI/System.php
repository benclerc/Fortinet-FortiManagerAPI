<?php

/**
 * PHP library used for interacting with Fortinet firewall manager (FortiManager) API (System).
 * @author Benjamin Clerc <contact@benjamin-clerc.com>
 * @copyright Copyright (c) 2021, Benjamin Clerc.
 * @license MIT
 * @link https://github.com/benclerc/Fortinet-FortiManagerAPI
 */

namespace Fortinet\FortiManagerAPI;

use stdClass;

/**
 * FortiManager API System
 * @link https://fndn.fortinet.net/ Fortinet developer ressource center.
 */
class System extends FortiManagerAPI
{
	/**
	 * @route  POST /sys/api/sdnconnector (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execApiSdnconnector(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/sys/api/sdnconnector', NULL, $body);
	}


	/**
	 * @route  POST /sys/generate/wsdl (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execGenerateWsdl(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/sys/generate/wsdl', NULL, $body);
	}


	/**
	 * @route  POST /sys/ha/status (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getHaStatus(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/sys/ha/status', NULL, $body);
	}


	/**
	 * @route  POST /sys/login/user (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execLoginUser(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/sys/login/user', NULL, $body);
	}


	/**
	 * @route  POST /sys/login/challenge (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execLoginChallenge(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/sys/login/challenge', NULL, $body);
	}


	/**
	 * @route  POST /sys/logout (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execLogout(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/sys/logout', NULL, $body);
	}


	/**
	 * @route  POST /sys/proxy/json (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execProxyJson(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/sys/proxy/json', NULL, $body);
	}


	/**
	 * @route  POST /sys/reboot (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execReboot(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/sys/reboot', NULL, $body);
	}


	/**
	 * @route  POST /sys/status (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getStatus(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/sys/status', NULL, $body);
	}
}
