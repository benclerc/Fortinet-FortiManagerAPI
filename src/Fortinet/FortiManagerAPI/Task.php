<?php

/**
 * PHP library used for interacting with Fortinet firewall manager (FortiManager) API (Task).
 * @author Benjamin Clerc <contact@benjamin-clerc.com>
 * @copyright Copyright (c) 2021, Benjamin Clerc.
 * @license MIT
 * @link https://github.com/benclerc/Fortinet-FortiManagerAPI
 */

namespace Fortinet\FortiManagerAPI;

use stdClass;

/**
 * FortiManager API Task
 * @link https://fndn.fortinet.net/ Fortinet developer ressource center.
 */
class Task extends FortiManagerAPI
{
	/**
	 * @route  POST /task/task (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getTask(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/task/task', NULL, $body);
	}


	/**
	 * @route  POST /task/task/{task} (get)
	 * @param  $task
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneTask(string $task, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/task/task/{task}', ['task'=>$task], $body);
	}


	/**
	 * @route  POST /task/task/{task}/line (get)
	 * @param  $task
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getTaskLine(string $task, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/task/task/{task}/line', ['task'=>$task], $body);
	}


	/**
	 * @route  POST /task/task/{task}/line/{line} (get)
	 * @param  $task
	 * @param  $line
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneTaskLine(string $task, string $line, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/task/task/{task}/line/{line}', ['task'=>$task, 'line'=>$line], $body);
	}


	/**
	 * @route  POST /task/task/{task}/line/{line}/history (get)
	 * @param  $task
	 * @param  $line
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getTaskLineHistory(string $task, string $line, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/task/task/{task}/line/{line}/history', ['task'=>$task, 'line'=>$line], $body);
	}


	/**
	 * @route  POST /task/task/{task}/line/{line}/history/{history} (get)
	 * @param  $task
	 * @param  $line
	 * @param  $history
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneTaskLineHistory(string $task, string $line, string $history, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/task/task/{task}/line/{line}/history/{history}', ['task'=>$task, 'line'=>$line, 'history'=>$history], $body);
	}
}
