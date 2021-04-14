<?php

/**
 * PHP library used for interacting with Fortinet firewall manager (FortiManager) API (DeviceManager).
 * @author Benjamin Clerc <contact@benjamin-clerc.com>
 * @copyright Copyright (c) 2021, Benjamin Clerc.
 * @license MIT
 * @link https://github.com/benclerc/Fortinet-FortiManagerAPI
 */

namespace Fortinet\FortiManagerAPI;

use stdClass;

/**
 * FortiManager API DeviceManager
 * @link https://fndn.fortinet.net/ Fortinet developer ressource center.
 */
class DeviceManager extends FortiManagerAPI
{
	/**
	 * @route  POST /dvm/cmd/add/device (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execCmdAddDevice(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvm/cmd/add/device', NULL, $body);
	}


	/**
	 * @route  POST /dvm/cmd/add/dev-list (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execCmdAddDevList(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvm/cmd/add/dev-list', NULL, $body);
	}


	/**
	 * @route  POST /dvm/cmd/change-ha-seq (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execCmdChangeHaSeq(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvm/cmd/change-ha-seq', NULL, $body);
	}


	/**
	 * @route  POST /dvm/cmd/del/device (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execCmdDelDevice(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvm/cmd/del/device', NULL, $body);
	}


	/**
	 * @route  POST /dvm/cmd/del/dev-list (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execCmdDelDevList(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvm/cmd/del/dev-list', NULL, $body);
	}


	/**
	 * @route  POST /dvm/cmd/discover/device (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execCmdDiscoverDevice(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvm/cmd/discover/device', NULL, $body);
	}


	/**
	 * @route  POST /dvm/cmd/import/dev-list (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execCmdImportDevList(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvm/cmd/import/dev-list', NULL, $body);
	}


	/**
	 * @route  POST /dvm/cmd/reload/dev-list (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execCmdReloadDevList(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvm/cmd/reload/dev-list', NULL, $body);
	}


	/**
	 * @route  POST /dvm/cmd/update/device (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execCmdUpdateDevice(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvm/cmd/update/device', NULL, $body);
	}


	/**
	 * @route  POST /dvm/cmd/update/dev-list (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execCmdUpdateDevList(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvm/cmd/update/dev-list', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/_meta_fields/adom (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addMetaFieldsAdom(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/_meta_fields/adom', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/_meta_fields/adom (delete)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteMetaFieldsAdom(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/dvmdb/_meta_fields/adom', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/_meta_fields/adom (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getMetaFieldsAdom(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/_meta_fields/adom', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/_meta_fields/adom (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setMetaFieldsAdom(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/_meta_fields/adom', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/_meta_fields/adom (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateMetaFieldsAdom(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/_meta_fields/adom', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/_meta_fields/device (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addMetaFieldsDevice(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/_meta_fields/device', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/_meta_fields/device (delete)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteMetaFieldsDevice(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/dvmdb/_meta_fields/device', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/_meta_fields/device (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getMetaFieldsDevice(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/_meta_fields/device', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/_meta_fields/device (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setMetaFieldsDevice(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/_meta_fields/device', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/_meta_fields/device (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateMetaFieldsDevice(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/_meta_fields/device', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/_meta_fields/group (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addMetaFieldsGroup(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/_meta_fields/group', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/_meta_fields/group (delete)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteMetaFieldsGroup(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/dvmdb/_meta_fields/group', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/_meta_fields/group (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getMetaFieldsGroup(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/_meta_fields/group', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/_meta_fields/group (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setMetaFieldsGroup(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/_meta_fields/group', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/_meta_fields/group (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateMetaFieldsGroup(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/_meta_fields/group', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/adom (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getAdom(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/adom (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addAdom(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/adom', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/adom (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setAdom(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/adom', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/adom (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateAdom(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/adom', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom} (get)
	 * @param  $adom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getAdomAdom(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/object (add)
	 * @param  $adom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addAdomObject(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/adom/{adom}/object', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom} (set)
	 * @param  $adom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setAdomAdom(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/adom/{adom}', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/object (set)
	 * @param  $adom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setAdomObject(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/adom/{adom}/object', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom} (update)
	 * @param  $adom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateAdomAdom(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/adom/{adom}', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/object (update)
	 * @param  $adom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateAdomObject(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/adom/{adom}/object', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom} (delete)
	 * @param  $adom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteAdomAdom(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/dvmdb/adom/{adom}', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/object (delete)
	 * @param  $adom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteAdomObject(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/dvmdb/adom/{adom}/object', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/device (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getDevice(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/device', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/device (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setDevice(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/device', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/device (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateDevice(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/device', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/device/{device} (get)
	 * @param  $device
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneDevice(string $device, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/device/{device}', ['device'=>$device], $body);
	}


	/**
	 * @route  POST /dvmdb/device/{device} (set)
	 * @param  $device
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneDevice(string $device, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/device/{device}', ['device'=>$device], $body);
	}


	/**
	 * @route  POST /dvmdb/device/{device} (update)
	 * @param  $device
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneDevice(string $device, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/device/{device}', ['device'=>$device], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/device (get)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getAdomDevice(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/device', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/device (set)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setAdomDevice(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/adom/{adom}/device', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/device (update)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateAdomDevice(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/adom/{adom}/device', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/device/{device} (get)
	 * @param  $adom ADOM name.
	 * @param  $device
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneAdomDevice(string $adom = 'root', string $device, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/device/{device}', ['adom'=>$adom, 'device'=>$device], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/device/{device} (set)
	 * @param  $adom ADOM name.
	 * @param  $device
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneAdomDevice(string $adom = 'root', string $device, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/adom/{adom}/device/{device}', ['adom'=>$adom, 'device'=>$device], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/device/{device} (update)
	 * @param  $adom ADOM name.
	 * @param  $device
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneAdomDevice(string $adom = 'root', string $device, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/adom/{adom}/device/{device}', ['adom'=>$adom, 'device'=>$device], $body);
	}


	/**
	 * @route  POST /dvmdb/device/{device}/ha_slave (get)
	 * @param  $device
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getDeviceHaSlave(string $device, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/device/{device}/ha_slave', ['device'=>$device], $body);
	}


	/**
	 * @route  POST /dvmdb/device/{device}/ha_slave/{ha_slave} (get)
	 * @param  $device
	 * @param  $ha_slave
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneDeviceHaSlave(string $device, string $ha_slave, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/device/{device}/ha_slave/{ha_slave}', ['device'=>$device, 'ha_slave'=>$ha_slave], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/device/{device}/ha_slave (get)
	 * @param  $adom ADOM name.
	 * @param  $device
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getAdomDeviceHaSlave(string $adom = 'root', string $device, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/device/{device}/ha_slave', ['adom'=>$adom, 'device'=>$device], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/device/{device}/ha_slave/{ha_slave} (get)
	 * @param  $adom ADOM name.
	 * @param  $device
	 * @param  $ha_slave
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneAdomDeviceHaSlave(
		string $adom = 'root',
		string $device,
		string $ha_slave,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/device/{device}/ha_slave/{ha_slave}', ['adom'=>$adom, 'device'=>$device, 'ha_slave'=>$ha_slave], $body);
	}


	/**
	 * @route  POST /dvmdb/device/{device}/vdom (get)
	 * @param  $device
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getDeviceVdom(string $device, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/device/{device}/vdom', ['device'=>$device], $body);
	}


	/**
	 * @route  POST /dvmdb/device/{device}/vdom (add)
	 * @param  $device
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addDeviceVdom(string $device, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/device/{device}/vdom', ['device'=>$device], $body);
	}


	/**
	 * @route  POST /dvmdb/device/{device}/vdom (set)
	 * @param  $device
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setDeviceVdom(string $device, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/device/{device}/vdom', ['device'=>$device], $body);
	}


	/**
	 * @route  POST /dvmdb/device/{device}/vdom (update)
	 * @param  $device
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateDeviceVdom(string $device, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/device/{device}/vdom', ['device'=>$device], $body);
	}


	/**
	 * @route  POST /dvmdb/device/{device}/vdom/{vdom} (get)
	 * @param  $device
	 * @param  $vdom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneDeviceVdom(string $device, string $vdom, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/device/{device}/vdom/{vdom}', ['device'=>$device, 'vdom'=>$vdom], $body);
	}


	/**
	 * @route  POST /dvmdb/device/{device}/vdom/{vdom} (set)
	 * @param  $device
	 * @param  $vdom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneDeviceVdom(string $device, string $vdom, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/device/{device}/vdom/{vdom}', ['device'=>$device, 'vdom'=>$vdom], $body);
	}


	/**
	 * @route  POST /dvmdb/device/{device}/vdom/{vdom} (update)
	 * @param  $device
	 * @param  $vdom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneDeviceVdom(string $device, string $vdom, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/device/{device}/vdom/{vdom}', ['device'=>$device, 'vdom'=>$vdom], $body);
	}


	/**
	 * @route  POST /dvmdb/device/{device}/vdom/{vdom} (delete)
	 * @param  $device
	 * @param  $vdom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneDeviceVdom(string $device, string $vdom, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/dvmdb/device/{device}/vdom/{vdom}', ['device'=>$device, 'vdom'=>$vdom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/device/{device}/vdom (get)
	 * @param  $adom ADOM name.
	 * @param  $device
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getAdomDeviceVdom(string $adom = 'root', string $device, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/device/{device}/vdom', ['adom'=>$adom, 'device'=>$device], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/device/{device}/vdom (add)
	 * @param  $adom ADOM name.
	 * @param  $device
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addAdomDeviceVdom(string $adom = 'root', string $device, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/adom/{adom}/device/{device}/vdom', ['adom'=>$adom, 'device'=>$device], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/device/{device}/vdom (set)
	 * @param  $adom ADOM name.
	 * @param  $device
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setAdomDeviceVdom(string $adom = 'root', string $device, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/adom/{adom}/device/{device}/vdom', ['adom'=>$adom, 'device'=>$device], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/device/{device}/vdom (update)
	 * @param  $adom ADOM name.
	 * @param  $device
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateAdomDeviceVdom(string $adom = 'root', string $device, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/adom/{adom}/device/{device}/vdom', ['adom'=>$adom, 'device'=>$device], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/device/{device}/vdom/{vdom} (get)
	 * @param  $adom ADOM name.
	 * @param  $device
	 * @param  $vdom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneAdomDeviceVdom(
		string $adom = 'root',
		string $device,
		string $vdom,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/device/{device}/vdom/{vdom}', ['adom'=>$adom, 'device'=>$device, 'vdom'=>$vdom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/device/{device}/vdom/{vdom} (set)
	 * @param  $adom ADOM name.
	 * @param  $device
	 * @param  $vdom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneAdomDeviceVdom(
		string $adom = 'root',
		string $device,
		string $vdom,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('set', '/dvmdb/adom/{adom}/device/{device}/vdom/{vdom}', ['adom'=>$adom, 'device'=>$device, 'vdom'=>$vdom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/device/{device}/vdom/{vdom} (update)
	 * @param  $adom ADOM name.
	 * @param  $device
	 * @param  $vdom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneAdomDeviceVdom(
		string $adom = 'root',
		string $device,
		string $vdom,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/dvmdb/adom/{adom}/device/{device}/vdom/{vdom}', ['adom'=>$adom, 'device'=>$device, 'vdom'=>$vdom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/device/{device}/vdom/{vdom} (delete)
	 * @param  $adom ADOM name.
	 * @param  $device
	 * @param  $vdom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneAdomDeviceVdom(
		string $adom = 'root',
		string $device,
		string $vdom,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/dvmdb/adom/{adom}/device/{device}/vdom/{vdom}', ['adom'=>$adom, 'device'=>$device, 'vdom'=>$vdom], $body);
	}


	/**
	 * @route  POST /dvmdb/device/replace/sn/{device_name} (exec)
	 * @param  $device_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneDeviceReplaceSn(string $device_name, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/device/replace/sn/{device_name}', ['device_name'=>$device_name], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/device/replace/sn/{device_name} (exec)
	 * @param  $adom ADOM name.
	 * @param  $device_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneAdomDeviceReplaceSn(
		string $adom = 'root',
		string $device_name,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/device/replace/sn/{device_name}', ['adom'=>$adom, 'device_name'=>$device_name], $body);
	}


	/**
	 * @route  POST /dvmdb/folder (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getFolder(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/folder', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/folder (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addFolder(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/folder', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/folder (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setFolder(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/folder', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/folder (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateFolder(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/folder', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/folder/{folder} (get)
	 * @param  $folder
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneFolder(string $folder, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/folder/{folder}', ['folder'=>$folder], $body);
	}


	/**
	 * @route  POST /dvmdb/folder/{folder} (set)
	 * @param  $folder
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneFolder(string $folder, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/folder/{folder}', ['folder'=>$folder], $body);
	}


	/**
	 * @route  POST /dvmdb/folder/{folder} (update)
	 * @param  $folder
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneFolder(string $folder, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/folder/{folder}', ['folder'=>$folder], $body);
	}


	/**
	 * @route  POST /dvmdb/folder/{folder} (delete)
	 * @param  $folder
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneFolder(string $folder, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/dvmdb/folder/{folder}', ['folder'=>$folder], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/folder (get)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getAdomFolder(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/folder', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/folder (add)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addAdomFolder(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/adom/{adom}/folder', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/folder (set)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setAdomFolder(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/adom/{adom}/folder', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/folder (update)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateAdomFolder(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/adom/{adom}/folder', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/folder/{folder} (get)
	 * @param  $adom ADOM name.
	 * @param  $folder
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneAdomFolder(string $adom = 'root', string $folder, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/folder/{folder}', ['adom'=>$adom, 'folder'=>$folder], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/folder/{folder} (set)
	 * @param  $adom ADOM name.
	 * @param  $folder
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneAdomFolder(string $adom = 'root', string $folder, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/adom/{adom}/folder/{folder}', ['adom'=>$adom, 'folder'=>$folder], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/folder/{folder} (update)
	 * @param  $adom ADOM name.
	 * @param  $folder
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneAdomFolder(string $adom = 'root', string $folder, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/adom/{adom}/folder/{folder}', ['adom'=>$adom, 'folder'=>$folder], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/folder/{folder} (delete)
	 * @param  $adom ADOM name.
	 * @param  $folder
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneAdomFolder(string $adom = 'root', string $folder, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/dvmdb/adom/{adom}/folder/{folder}', ['adom'=>$adom, 'folder'=>$folder], $body);
	}


	/**
	 * @route  POST /dvmdb/group (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGroup(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/group', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/group (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGroup(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/group', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/group (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGroup(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/group', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/group (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGroup(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/group', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/group/{group} (get)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGroup(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/group/{group}', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /dvmdb/group/{group}/object (add)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGroupObject(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/group/{group}/object', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /dvmdb/group/{group} (set)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGroup(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/group/{group}', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /dvmdb/group/{group}/object (set)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGroupObject(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/group/{group}/object', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /dvmdb/group/{group} (update)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGroup(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/group/{group}', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /dvmdb/group/{group}/object (update)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGroupObject(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/group/{group}/object', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /dvmdb/group/{group} (delete)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGroup(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/dvmdb/group/{group}', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /dvmdb/group/{group}/object (delete)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteGroupObject(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/dvmdb/group/{group}/object', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/group (get)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getAdomGroup(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/group', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/group (add)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addAdomGroup(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/adom/{adom}/group', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/group (set)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setAdomGroup(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/adom/{adom}/group', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/group (update)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateAdomGroup(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/adom/{adom}/group', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/group/{group} (get)
	 * @param  $adom ADOM name.
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneAdomGroup(string $adom = 'root', string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/group/{group}', ['adom'=>$adom, 'group'=>$group], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/group/{group}/object (add)
	 * @param  $adom ADOM name.
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addAdomGroupObject(string $adom = 'root', string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/adom/{adom}/group/{group}/object', ['adom'=>$adom, 'group'=>$group], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/group/{group} (set)
	 * @param  $adom ADOM name.
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneAdomGroup(string $adom = 'root', string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/adom/{adom}/group/{group}', ['adom'=>$adom, 'group'=>$group], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/group/{group}/object (set)
	 * @param  $adom ADOM name.
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setAdomGroupObject(string $adom = 'root', string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/adom/{adom}/group/{group}/object', ['adom'=>$adom, 'group'=>$group], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/group/{group} (update)
	 * @param  $adom ADOM name.
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneAdomGroup(string $adom = 'root', string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/adom/{adom}/group/{group}', ['adom'=>$adom, 'group'=>$group], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/group/{group}/object (update)
	 * @param  $adom ADOM name.
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateAdomGroupObject(string $adom = 'root', string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/adom/{adom}/group/{group}/object', ['adom'=>$adom, 'group'=>$group], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/group/{group} (delete)
	 * @param  $adom ADOM name.
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneAdomGroup(string $adom = 'root', string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/dvmdb/adom/{adom}/group/{group}', ['adom'=>$adom, 'group'=>$group], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/group/{group}/object (delete)
	 * @param  $adom ADOM name.
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteAdomGroupObject(string $adom = 'root', string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/dvmdb/adom/{adom}/group/{group}/object', ['adom'=>$adom, 'group'=>$group], $body);
	}


	/**
	 * @route  POST /dvmdb/revision (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getRevision(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/revision', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/revision (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addRevision(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/revision', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/revision (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setRevision(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/revision', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/revision (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateRevision(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/revision', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/revision/{revision} (get)
	 * @param  $revision
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneRevision(string $revision, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/revision/{revision}', ['revision'=>$revision], $body);
	}


	/**
	 * @route  POST /dvmdb/revision/{revision} (set)
	 * @param  $revision
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneRevision(string $revision, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/revision/{revision}', ['revision'=>$revision], $body);
	}


	/**
	 * @route  POST /dvmdb/revision/{revision} (update)
	 * @param  $revision
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneRevision(string $revision, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/revision/{revision}', ['revision'=>$revision], $body);
	}


	/**
	 * @route  POST /dvmdb/revision/{revision} (delete)
	 * @param  $revision
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneRevision(string $revision, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/dvmdb/revision/{revision}', ['revision'=>$revision], $body);
	}


	/**
	 * @route  POST /dvmdb/revision/{revision} (clone)
	 * @param  $revision
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function cloneOneRevision(string $revision, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('clone', '/dvmdb/revision/{revision}', ['revision'=>$revision], $body);
	}


	/**
	 * @route  POST /dvmdb/global/revision (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalRevision(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/global/revision', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/global/revision (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalRevision(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/global/revision', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/global/revision (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalRevision(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/global/revision', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/global/revision (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalRevision(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/global/revision', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/global/revision/{revision} (get)
	 * @param  $revision
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalRevision(string $revision, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/global/revision/{revision}', ['revision'=>$revision], $body);
	}


	/**
	 * @route  POST /dvmdb/global/revision/{revision} (set)
	 * @param  $revision
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalRevision(string $revision, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/global/revision/{revision}', ['revision'=>$revision], $body);
	}


	/**
	 * @route  POST /dvmdb/global/revision/{revision} (update)
	 * @param  $revision
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalRevision(string $revision, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/global/revision/{revision}', ['revision'=>$revision], $body);
	}


	/**
	 * @route  POST /dvmdb/global/revision/{revision} (delete)
	 * @param  $revision
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalRevision(string $revision, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/dvmdb/global/revision/{revision}', ['revision'=>$revision], $body);
	}


	/**
	 * @route  POST /dvmdb/global/revision/{revision} (clone)
	 * @param  $revision
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function cloneOneGlobalRevision(string $revision, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('clone', '/dvmdb/global/revision/{revision}', ['revision'=>$revision], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/revision (get)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getAdomRevision(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/revision', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/revision (add)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addAdomRevision(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/adom/{adom}/revision', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/revision (set)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setAdomRevision(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/adom/{adom}/revision', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/revision (update)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateAdomRevision(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/adom/{adom}/revision', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/revision/{revision} (get)
	 * @param  $adom ADOM name.
	 * @param  $revision
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneAdomRevision(string $adom = 'root', string $revision, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/revision/{revision}', ['adom'=>$adom, 'revision'=>$revision], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/revision/{revision} (set)
	 * @param  $adom ADOM name.
	 * @param  $revision
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneAdomRevision(string $adom = 'root', string $revision, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/adom/{adom}/revision/{revision}', ['adom'=>$adom, 'revision'=>$revision], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/revision/{revision} (update)
	 * @param  $adom ADOM name.
	 * @param  $revision
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneAdomRevision(string $adom = 'root', string $revision, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/adom/{adom}/revision/{revision}', ['adom'=>$adom, 'revision'=>$revision], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/revision/{revision} (delete)
	 * @param  $adom ADOM name.
	 * @param  $revision
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneAdomRevision(string $adom = 'root', string $revision, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/dvmdb/adom/{adom}/revision/{revision}', ['adom'=>$adom, 'revision'=>$revision], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/revision/{revision} (clone)
	 * @param  $adom ADOM name.
	 * @param  $revision
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function cloneOneAdomRevision(string $adom = 'root', string $revision, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('clone', '/dvmdb/adom/{adom}/revision/{revision}', ['adom'=>$adom, 'revision'=>$revision], $body);
	}


	/**
	 * @route  POST /dvmdb/script (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getScript(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/script', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/script (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addScript(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/script', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/script (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setScript(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/script', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/script (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateScript(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/script', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/script/{script} (get)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneScript(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/script/{script}', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/script/{script}/object (add)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addScriptObject(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/script/{script}/object', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/script/{script} (set)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneScript(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/script/{script}', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/script/{script}/object (set)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setScriptObject(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/script/{script}/object', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/script/{script} (update)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneScript(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/script/{script}', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/script/{script}/object (update)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateScriptObject(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/script/{script}/object', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/script/{script} (delete)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneScript(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/dvmdb/script/{script}', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/script/{script}/object (delete)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteScriptObject(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/dvmdb/script/{script}/object', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/global/script (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalScript(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/global/script', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/global/script (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalScript(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/global/script', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/global/script (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalScript(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/global/script', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/global/script (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalScript(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/global/script', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/global/script/{script} (get)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalScript(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/global/script/{script}', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/global/script/{script}/object (add)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalScriptObject(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/global/script/{script}/object', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/global/script/{script} (set)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalScript(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/global/script/{script}', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/global/script/{script}/object (set)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalScriptObject(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/global/script/{script}/object', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/global/script/{script} (update)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalScript(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/global/script/{script}', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/global/script/{script}/object (update)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalScriptObject(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/global/script/{script}/object', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/global/script/{script} (delete)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalScript(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/dvmdb/global/script/{script}', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/global/script/{script}/object (delete)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteGlobalScriptObject(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/dvmdb/global/script/{script}/object', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script (get)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getAdomScript(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/script', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script (add)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addAdomScript(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/adom/{adom}/script', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script (set)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setAdomScript(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/adom/{adom}/script', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script (update)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateAdomScript(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/adom/{adom}/script', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/{script} (get)
	 * @param  $adom ADOM name.
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneAdomScript(string $adom = 'root', string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/script/{script}', ['adom'=>$adom, 'script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/{script}/object (add)
	 * @param  $adom ADOM name.
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addAdomScriptObject(string $adom = 'root', string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/adom/{adom}/script/{script}/object', ['adom'=>$adom, 'script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/{script} (set)
	 * @param  $adom ADOM name.
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneAdomScript(string $adom = 'root', string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/adom/{adom}/script/{script}', ['adom'=>$adom, 'script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/{script}/object (set)
	 * @param  $adom ADOM name.
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setAdomScriptObject(string $adom = 'root', string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/adom/{adom}/script/{script}/object', ['adom'=>$adom, 'script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/{script} (update)
	 * @param  $adom ADOM name.
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneAdomScript(string $adom = 'root', string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/adom/{adom}/script/{script}', ['adom'=>$adom, 'script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/{script}/object (update)
	 * @param  $adom ADOM name.
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateAdomScriptObject(string $adom = 'root', string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/adom/{adom}/script/{script}/object', ['adom'=>$adom, 'script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/{script} (delete)
	 * @param  $adom ADOM name.
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneAdomScript(string $adom = 'root', string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/dvmdb/adom/{adom}/script/{script}', ['adom'=>$adom, 'script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/{script}/object (delete)
	 * @param  $adom ADOM name.
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteAdomScriptObject(string $adom = 'root', string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/dvmdb/adom/{adom}/script/{script}/object', ['adom'=>$adom, 'script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/script/{script}/script_schedule (get)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getScriptScriptSchedule(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/script/{script}/script_schedule', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/script/{script}/script_schedule (add)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addScriptScriptSchedule(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/script/{script}/script_schedule', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/script/{script}/script_schedule (set)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setScriptScriptSchedule(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/script/{script}/script_schedule', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/script/{script}/script_schedule (update)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateScriptScriptSchedule(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/script/{script}/script_schedule', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/script/{script}/script_schedule/{script_schedule} (get)
	 * @param  $script
	 * @param  $script_schedule
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneScriptScriptSchedule(string $script, string $script_schedule, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/script/{script}/script_schedule/{script_schedule}', ['script'=>$script, 'script_schedule'=>$script_schedule], $body);
	}


	/**
	 * @route  POST /dvmdb/script/{script}/script_schedule/{script_schedule} (set)
	 * @param  $script
	 * @param  $script_schedule
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneScriptScriptSchedule(string $script, string $script_schedule, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/script/{script}/script_schedule/{script_schedule}', ['script'=>$script, 'script_schedule'=>$script_schedule], $body);
	}


	/**
	 * @route  POST /dvmdb/script/{script}/script_schedule/{script_schedule} (update)
	 * @param  $script
	 * @param  $script_schedule
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneScriptScriptSchedule(
		string $script,
		string $script_schedule,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/dvmdb/script/{script}/script_schedule/{script_schedule}', ['script'=>$script, 'script_schedule'=>$script_schedule], $body);
	}


	/**
	 * @route  POST /dvmdb/script/{script}/script_schedule/{script_schedule} (delete)
	 * @param  $script
	 * @param  $script_schedule
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneScriptScriptSchedule(
		string $script,
		string $script_schedule,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/dvmdb/script/{script}/script_schedule/{script_schedule}', ['script'=>$script, 'script_schedule'=>$script_schedule], $body);
	}


	/**
	 * @route  POST /dvmdb/global/script/{script}/script_schedule (get)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalScriptScriptSchedule(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/global/script/{script}/script_schedule', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/global/script/{script}/script_schedule (add)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalScriptScriptSchedule(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/global/script/{script}/script_schedule', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/global/script/{script}/script_schedule (set)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalScriptScriptSchedule(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/global/script/{script}/script_schedule', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/global/script/{script}/script_schedule (update)
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalScriptScriptSchedule(string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/global/script/{script}/script_schedule', ['script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/global/script/{script}/script_schedule/{script_schedule} (get)
	 * @param  $script
	 * @param  $script_schedule
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalScriptScriptSchedule(
		string $script,
		string $script_schedule,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/dvmdb/global/script/{script}/script_schedule/{script_schedule}', ['script'=>$script, 'script_schedule'=>$script_schedule], $body);
	}


	/**
	 * @route  POST /dvmdb/global/script/{script}/script_schedule/{script_schedule} (set)
	 * @param  $script
	 * @param  $script_schedule
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalScriptScriptSchedule(
		string $script,
		string $script_schedule,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('set', '/dvmdb/global/script/{script}/script_schedule/{script_schedule}', ['script'=>$script, 'script_schedule'=>$script_schedule], $body);
	}


	/**
	 * @route  POST /dvmdb/global/script/{script}/script_schedule/{script_schedule} (update)
	 * @param  $script
	 * @param  $script_schedule
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalScriptScriptSchedule(
		string $script,
		string $script_schedule,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/dvmdb/global/script/{script}/script_schedule/{script_schedule}', ['script'=>$script, 'script_schedule'=>$script_schedule], $body);
	}


	/**
	 * @route  POST /dvmdb/global/script/{script}/script_schedule/{script_schedule} (delete)
	 * @param  $script
	 * @param  $script_schedule
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalScriptScriptSchedule(
		string $script,
		string $script_schedule,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/dvmdb/global/script/{script}/script_schedule/{script_schedule}', ['script'=>$script, 'script_schedule'=>$script_schedule], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/{script}/script_schedule (get)
	 * @param  $adom ADOM name.
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getAdomScriptScriptSchedule(string $adom = 'root', string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/script/{script}/script_schedule', ['adom'=>$adom, 'script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/{script}/script_schedule (add)
	 * @param  $adom ADOM name.
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addAdomScriptScriptSchedule(string $adom = 'root', string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/dvmdb/adom/{adom}/script/{script}/script_schedule', ['adom'=>$adom, 'script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/{script}/script_schedule (set)
	 * @param  $adom ADOM name.
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setAdomScriptScriptSchedule(string $adom = 'root', string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/dvmdb/adom/{adom}/script/{script}/script_schedule', ['adom'=>$adom, 'script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/{script}/script_schedule (update)
	 * @param  $adom ADOM name.
	 * @param  $script
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateAdomScriptScriptSchedule(string $adom = 'root', string $script, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/dvmdb/adom/{adom}/script/{script}/script_schedule', ['adom'=>$adom, 'script'=>$script], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/{script}/script_schedule/{script_schedule} (get)
	 * @param  $adom ADOM name.
	 * @param  $script
	 * @param  $script_schedule
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneAdomScriptScriptSchedule(
		string $adom = 'root',
		string $script,
		string $script_schedule,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/script/{script}/script_schedule/{script_schedule}', ['adom'=>$adom, 'script'=>$script, 'script_schedule'=>$script_schedule], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/{script}/script_schedule/{script_schedule} (set)
	 * @param  $adom ADOM name.
	 * @param  $script
	 * @param  $script_schedule
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneAdomScriptScriptSchedule(
		string $adom = 'root',
		string $script,
		string $script_schedule,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('set', '/dvmdb/adom/{adom}/script/{script}/script_schedule/{script_schedule}', ['adom'=>$adom, 'script'=>$script, 'script_schedule'=>$script_schedule], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/{script}/script_schedule/{script_schedule} (update)
	 * @param  $adom ADOM name.
	 * @param  $script
	 * @param  $script_schedule
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneAdomScriptScriptSchedule(
		string $adom = 'root',
		string $script,
		string $script_schedule,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/dvmdb/adom/{adom}/script/{script}/script_schedule/{script_schedule}', ['adom'=>$adom, 'script'=>$script, 'script_schedule'=>$script_schedule], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/{script}/script_schedule/{script_schedule} (delete)
	 * @param  $adom ADOM name.
	 * @param  $script
	 * @param  $script_schedule
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneAdomScriptScriptSchedule(
		string $adom = 'root',
		string $script,
		string $script_schedule,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/dvmdb/adom/{adom}/script/{script}/script_schedule/{script_schedule}', ['adom'=>$adom, 'script'=>$script, 'script_schedule'=>$script_schedule], $body);
	}


	/**
	 * @route  POST /dvmdb/global/script/log/latest (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalScriptLogLatest(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/global/script/log/latest', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/log/latest (get)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getAdomScriptLogLatest(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/script/log/latest', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/global/script/log/output/logid/{log_id} (get)
	 * @param  $log_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalScriptLogOutputLogid(string $log_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/global/script/log/output/logid/{log_id}', ['log_id'=>$log_id], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/log/output/logid/{log_id} (get)
	 * @param  $adom ADOM name.
	 * @param  $log_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneAdomScriptLogOutputLogid(string $adom = 'root', string $log_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/script/log/output/logid/{log_id}', ['adom'=>$adom, 'log_id'=>$log_id], $body);
	}


	/**
	 * @route  POST /dvmdb/global/script/log/summary (get)
	 * @param  $summary Log sequence, with 1 being assigned to the latest result.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalScriptLogSummary(string $summary, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/global/script/log/summary', ['summary'=>$summary], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/log/summary (get)
	 * @param  $adom ADOM name.
	 * @param  $summary Log sequence, with 1 being assigned to the latest result.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getAdomScriptLogSummary(string $adom = 'root', string $summary, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/script/log/summary', ['adom'=>$adom, 'summary'=>$summary], $body);
	}


	/**
	 * @route  POST /dvmdb/global/script/log/list (get)
	 * @param  $list Log sequence, with 1 being assigned to the latest result.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalScriptLogList(string $list, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/global/script/log/list', ['list'=>$list], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/log/list (get)
	 * @param  $adom ADOM name.
	 * @param  $list Log sequence, with 1 being assigned to the latest result.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getAdomScriptLogList(string $adom = 'root', string $list, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/script/log/list', ['adom'=>$adom, 'list'=>$list], $body);
	}


	/**
	 * @route  POST /dvmdb/script/log/latest/device/{device_name} (get)
	 * @param  $device_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneScriptLogLatestDevice(string $device_name, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/script/log/latest/device/{device_name}', ['device_name'=>$device_name], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/log/latest/device/{device_name} (get)
	 * @param  $adom ADOM name.
	 * @param  $device_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneAdomScriptLogLatestDevice(
		string $adom = 'root',
		string $device_name,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/script/log/latest/device/{device_name}', ['adom'=>$adom, 'device_name'=>$device_name], $body);
	}


	/**
	 * @route  POST /dvmdb/script/log/output/device/{device}/logid/{log_id} (get)
	 * @param  $device
	 * @param  $log_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneScriptLogOutputDeviceLogid(string $device, string $log_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/script/log/output/device/{device}/logid/{log_id}', ['device'=>$device, 'log_id'=>$log_id], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/log/output/device/{device}/logid/{log_id} (get)
	 * @param  $adom ADOM name.
	 * @param  $device
	 * @param  $log_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneAdomScriptLogOutputDeviceLogid(
		string $adom = 'root',
		string $device,
		string $log_id,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/script/log/output/device/{device}/logid/{log_id}', ['adom'=>$adom, 'device'=>$device, 'log_id'=>$log_id], $body);
	}


	/**
	 * @route  POST /dvmdb/script/log/summary/device/{device_name} (get)
	 * @param  $device_name Log sequence, with 1 being assigned to the latest result.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneScriptLogSummaryDevice(string $device_name, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/script/log/summary/device/{device_name}', ['device_name'=>$device_name], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/log/summary/device/{device_name} (get)
	 * @param  $adom ADOM name.
	 * @param  $device_name Log sequence, with 1 being assigned to the latest result.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneAdomScriptLogSummaryDevice(
		string $adom = 'root',
		string $device_name,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/script/log/summary/device/{device_name}', ['adom'=>$adom, 'device_name'=>$device_name], $body);
	}


	/**
	 * @route  POST /dvmdb/script/log/list/device/{device_name} (get)
	 * @param  $device_name Log sequence, with 1 being assigned to the latest result.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneScriptLogListDevice(string $device_name, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/script/log/list/device/{device_name}', ['device_name'=>$device_name], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/log/list/device/{device_name} (get)
	 * @param  $adom ADOM name.
	 * @param  $device_name Log sequence, with 1 being assigned to the latest result.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneAdomScriptLogListDevice(
		string $adom = 'root',
		string $device_name,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/script/log/list/device/{device_name}', ['adom'=>$adom, 'device_name'=>$device_name], $body);
	}


	/**
	 * @route  POST /dvmdb/script/execute (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execScriptExecute(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/script/execute', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/global/script/execute (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execGlobalScriptExecute(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/global/script/execute', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/script/execute (exec)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execAdomScriptExecute(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/script/execute', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/workflow (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getWorkflow(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/workflow', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/workflow/{workflow} (get)
	 * @param  $workflow
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneWorkflow(string $workflow, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/workflow/{workflow}', ['workflow'=>$workflow], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workflow (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalWorkflow(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/global/workflow', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/global/workflow/{workflow} (get)
	 * @param  $workflow
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalWorkflow(string $workflow, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/global/workflow/{workflow}', ['workflow'=>$workflow], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workflow (get)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getAdomWorkflow(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/workflow', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workflow/{workflow} (get)
	 * @param  $adom ADOM name.
	 * @param  $workflow
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneAdomWorkflow(string $adom = 'root', string $workflow, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/workflow/{workflow}', ['adom'=>$adom, 'workflow'=>$workflow], $body);
	}


	/**
	 * @route  POST /dvmdb/workflow/{workflow}/wflog (get)
	 * @param  $workflow
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getWorkflowWflog(string $workflow, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/workflow/{workflow}/wflog', ['workflow'=>$workflow], $body);
	}


	/**
	 * @route  POST /dvmdb/workflow/{workflow}/wflog/{wflog} (get)
	 * @param  $workflow
	 * @param  $wflog Log sequence, with 1 being assigned to the latest result.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneWorkflowWflog(string $workflow, string $wflog, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/workflow/{workflow}/wflog/{wflog}', ['workflow'=>$workflow, 'wflog'=>$wflog], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workflow/{workflow}/wflog (get)
	 * @param  $workflow
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalWorkflowWflog(string $workflow, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/global/workflow/{workflow}/wflog', ['workflow'=>$workflow], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workflow/{workflow}/wflog/{wflog} (get)
	 * @param  $workflow
	 * @param  $wflog Log sequence, with 1 being assigned to the latest result.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalWorkflowWflog(string $workflow, string $wflog, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/global/workflow/{workflow}/wflog/{wflog}', ['workflow'=>$workflow, 'wflog'=>$wflog], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workflow/{workflow}/wflog (get)
	 * @param  $adom ADOM name.
	 * @param  $workflow
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getAdomWorkflowWflog(string $adom = 'root', string $workflow, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/workflow/{workflow}/wflog', ['adom'=>$adom, 'workflow'=>$workflow], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workflow/{workflow}/wflog/{wflog} (get)
	 * @param  $adom ADOM name.
	 * @param  $workflow
	 * @param  $wflog Log sequence, with 1 being assigned to the latest result.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneAdomWorkflowWflog(
		string $adom = 'root',
		string $workflow,
		string $wflog,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/workflow/{workflow}/wflog/{wflog}', ['adom'=>$adom, 'workflow'=>$workflow, 'wflog'=>$wflog], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workflow/start/{session_id} (exec)
	 * @param  $session_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneGlobalWorkflowStart(string $session_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/global/workflow/start/{session_id}', ['session_id'=>$session_id], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workflow/start/{session_id} (exec)
	 * @param  $adom ADOM name.
	 * @param  $session_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneAdomWorkflowStart(string $adom = 'root', string $session_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/workflow/start/{session_id}', ['adom'=>$adom, 'session_id'=>$session_id], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workflow/save/{session_id} (exec)
	 * @param  $session_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneGlobalWorkflowSave(string $session_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/global/workflow/save/{session_id}', ['session_id'=>$session_id], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workflow/save/{session_id} (exec)
	 * @param  $adom ADOM name.
	 * @param  $session_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneAdomWorkflowSave(string $adom = 'root', string $session_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/workflow/save/{session_id}', ['adom'=>$adom, 'session_id'=>$session_id], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workflow/discard/{session_id} (exec)
	 * @param  $session_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneGlobalWorkflowDiscard(string $session_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/global/workflow/discard/{session_id}', ['session_id'=>$session_id], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workflow/discard/{session_id} (exec)
	 * @param  $adom ADOM name.
	 * @param  $session_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneAdomWorkflowDiscard(string $adom = 'root', string $session_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/workflow/discard/{session_id}', ['adom'=>$adom, 'session_id'=>$session_id], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workflow/drop/{session_id} (exec)
	 * @param  $session_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneGlobalWorkflowDrop(string $session_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/global/workflow/drop/{session_id}', ['session_id'=>$session_id], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workflow/drop/{session_id} (exec)
	 * @param  $adom ADOM name.
	 * @param  $session_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneAdomWorkflowDrop(string $adom = 'root', string $session_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/workflow/drop/{session_id}', ['adom'=>$adom, 'session_id'=>$session_id], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workflow/repair/{session_id} (exec)
	 * @param  $session_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneGlobalWorkflowRepair(string $session_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/global/workflow/repair/{session_id}', ['session_id'=>$session_id], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workflow/repair/{session_id} (exec)
	 * @param  $adom ADOM name.
	 * @param  $session_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneAdomWorkflowRepair(string $adom = 'root', string $session_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/workflow/repair/{session_id}', ['adom'=>$adom, 'session_id'=>$session_id], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workflow/submit/{session_id} (exec)
	 * @param  $session_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneGlobalWorkflowSubmit(string $session_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/global/workflow/submit/{session_id}', ['session_id'=>$session_id], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workflow/submit/{session_id} (exec)
	 * @param  $adom ADOM name.
	 * @param  $session_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneAdomWorkflowSubmit(string $adom = 'root', string $session_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/workflow/submit/{session_id}', ['adom'=>$adom, 'session_id'=>$session_id], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workflow/approve/{session_id} (exec)
	 * @param  $session_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneGlobalWorkflowApprove(string $session_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/global/workflow/approve/{session_id}', ['session_id'=>$session_id], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workflow/approve/{session_id} (exec)
	 * @param  $adom ADOM name.
	 * @param  $session_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneAdomWorkflowApprove(string $adom = 'root', string $session_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/workflow/approve/{session_id}', ['adom'=>$adom, 'session_id'=>$session_id], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workflow/reject/{session_id} (exec)
	 * @param  $session_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneGlobalWorkflowReject(string $session_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/global/workflow/reject/{session_id}', ['session_id'=>$session_id], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workflow/reject/{session_id} (exec)
	 * @param  $adom ADOM name.
	 * @param  $session_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneAdomWorkflowReject(string $adom = 'root', string $session_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/workflow/reject/{session_id}', ['adom'=>$adom, 'session_id'=>$session_id], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workflow/review/{session_id} (exec)
	 * @param  $session_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneGlobalWorkflowReview(string $session_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/global/workflow/review/{session_id}', ['session_id'=>$session_id], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workflow/review/{session_id} (exec)
	 * @param  $adom ADOM name.
	 * @param  $session_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneAdomWorkflowReview(string $adom = 'root', string $session_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/workflow/review/{session_id}', ['adom'=>$adom, 'session_id'=>$session_id], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workflow/revert/{session_id} (exec)
	 * @param  $session_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneGlobalWorkflowRevert(string $session_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/global/workflow/revert/{session_id}', ['session_id'=>$session_id], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workflow/revert/{session_id} (exec)
	 * @param  $adom ADOM name.
	 * @param  $session_id
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneAdomWorkflowRevert(string $adom = 'root', string $session_id, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/workflow/revert/{session_id}', ['adom'=>$adom, 'session_id'=>$session_id], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workspace/lock (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execGlobalWorkspaceLock(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/global/workspace/lock', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workspace/lock (exec)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execAdomWorkspaceLock(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/workspace/lock', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workspace/lock/pkg/{package_path_name} (exec)
	 * @param  $package_path_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneGlobalWorkspaceLockPkg(string $package_path_name, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/global/workspace/lock/pkg/{package_path_name}', ['package_path_name'=>$package_path_name], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workspace/lock/pkg/{package_path_name} (exec)
	 * @param  $adom ADOM name.
	 * @param  $package_path_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneAdomWorkspaceLockPkg(
		string $adom = 'root',
		string $package_path_name,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/workspace/lock/pkg/{package_path_name}', ['adom'=>$adom, 'package_path_name'=>$package_path_name], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workspace/lock/obj/{object_url_name} (exec)
	 * @param  $object_url_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneGlobalWorkspaceLockObject(string $object_url_name, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/global/workspace/lock/obj/{object_url_name}', ['object_url_name'=>$object_url_name], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workspace/lock/obj/{object_url_name} (exec)
	 * @param  $adom ADOM name.
	 * @param  $object_url_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneAdomWorkspaceLockObject(
		string $adom = 'root',
		string $object_url_name,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/workspace/lock/obj/{object_url_name}', ['adom'=>$adom, 'object_url_name'=>$object_url_name], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workspace/lock/dev/{device_name} (exec)
	 * @param  $adom ADOM name.
	 * @param  $device_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneAdomWorkspaceLockDev(
		string $adom = 'root',
		string $device_name,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/workspace/lock/dev/{device_name}', ['adom'=>$adom, 'device_name'=>$device_name], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workspace/unlock (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execGlobalWorkspaceUnlock(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/global/workspace/unlock', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workspace/unlock (exec)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execAdomWorkspaceUnlock(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/workspace/unlock', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workspace/unlock/pkg/{package_path_name} (exec)
	 * @param  $package_path_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneGlobalWorkspaceUnlockPkg(string $package_path_name, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/global/workspace/unlock/pkg/{package_path_name}', ['package_path_name'=>$package_path_name], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workspace/unlock/pkg/{package_path_name} (exec)
	 * @param  $adom ADOM name.
	 * @param  $package_path_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneAdomWorkspaceUnlockPkg(
		string $adom = 'root',
		string $package_path_name,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/workspace/unlock/pkg/{package_path_name}', ['adom'=>$adom, 'package_path_name'=>$package_path_name], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workspace/unlock/obj/{object_url_name} (exec)
	 * @param  $object_url_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneGlobalWorkspaceUnlockObject(string $object_url_name, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/global/workspace/unlock/obj/{object_url_name}', ['object_url_name'=>$object_url_name], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workspace/unlock/obj/{object_url_name} (exec)
	 * @param  $adom ADOM name.
	 * @param  $object_url_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneAdomWorkspaceUnlockObject(
		string $adom = 'root',
		string $object_url_name,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/workspace/unlock/obj/{object_url_name}', ['adom'=>$adom, 'object_url_name'=>$object_url_name], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workspace/unlock/dev/{device_name} (exec)
	 * @param  $adom ADOM name.
	 * @param  $device_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneAdomWorkspaceUnlockDev(
		string $adom = 'root',
		string $device_name,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/workspace/unlock/dev/{device_name}', ['adom'=>$adom, 'device_name'=>$device_name], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workspace/commit (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execGlobalWorkspaceCommit(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/global/workspace/commit', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workspace/commit (exec)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execAdomWorkspaceCommit(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/workspace/commit', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workspace/commit/pkg/{package_path_name} (exec)
	 * @param  $package_path_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneGlobalWorkspaceCommitPkg(string $package_path_name, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/global/workspace/commit/pkg/{package_path_name}', ['package_path_name'=>$package_path_name], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workspace/commit/pkg/{package_path_name} (exec)
	 * @param  $adom ADOM name.
	 * @param  $package_path_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneAdomWorkspaceCommitPkg(
		string $adom = 'root',
		string $package_path_name,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/workspace/commit/pkg/{package_path_name}', ['adom'=>$adom, 'package_path_name'=>$package_path_name], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workspace/commit/obj/{object_url_name} (exec)
	 * @param  $object_url_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneGlobalWorkspaceCommitObject(string $object_url_name, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/dvmdb/global/workspace/commit/obj/{object_url_name}', ['object_url_name'=>$object_url_name], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workspace/commit/obj/{object_url_name} (exec)
	 * @param  $adom ADOM name.
	 * @param  $object_url_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneAdomWorkspaceCommitObject(
		string $adom = 'root',
		string $object_url_name,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/workspace/commit/obj/{object_url_name}', ['adom'=>$adom, 'object_url_name'=>$object_url_name], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workspace/commit/dev/{device_name} (exec)
	 * @param  $adom ADOM name.
	 * @param  $device_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneAdomWorkspaceCommitDev(
		string $adom = 'root',
		string $device_name,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('exec', '/dvmdb/adom/{adom}/workspace/commit/dev/{device_name}', ['adom'=>$adom, 'device_name'=>$device_name], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workspace/lockinfo (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalWorkspaceLockinfo(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/global/workspace/lockinfo', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workspace/lockinfo (get)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getAdomWorkspaceLockinfo(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/workspace/lockinfo', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workspace/lockinfo/pkg/{package_path_name} (get)
	 * @param  $package_path_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalWorkspaceLockinfoPkg(string $package_path_name, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/global/workspace/lockinfo/pkg/{package_path_name}', ['package_path_name'=>$package_path_name], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workspace/lockinfo/pkg/{package_path_name} (get)
	 * @param  $adom ADOM name.
	 * @param  $package_path_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneAdomWorkspaceLockinfoPkg(
		string $adom = 'root',
		string $package_path_name,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/workspace/lockinfo/pkg/{package_path_name}', ['adom'=>$adom, 'package_path_name'=>$package_path_name], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workspace/lockinfo/obj/{object_url_name} (get)
	 * @param  $object_url_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalWorkspaceLockinfoObject(string $object_url_name, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/global/workspace/lockinfo/obj/{object_url_name}', ['object_url_name'=>$object_url_name], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workspace/lockinfo/obj/{object_url_name} (get)
	 * @param  $adom ADOM name.
	 * @param  $object_url_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneAdomWorkspaceLockinfoObject(
		string $adom = 'root',
		string $object_url_name,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/workspace/lockinfo/obj/{object_url_name}', ['adom'=>$adom, 'object_url_name'=>$object_url_name], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workspace/lockinfo/dev/{device_name} (get)
	 * @param  $adom ADOM name.
	 * @param  $device_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneAdomWorkspaceLockinfoDev(
		string $adom = 'root',
		string $device_name,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/workspace/lockinfo/dev/{device_name}', ['adom'=>$adom, 'device_name'=>$device_name], $body);
	}


	/**
	 * @route  POST /dvmdb/global/workspace/dirty (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalWorkspaceDirty(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/global/workspace/dirty', NULL, $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workspace/dirty (get)
	 * @param  $adom ADOM name.
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getAdomWorkspaceDirty(string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/workspace/dirty', ['adom'=>$adom], $body);
	}


	/**
	 * @route  POST /dvmdb/adom/{adom}/workspace/dirty/dev/{device_name} (get)
	 * @param  $adom ADOM name.
	 * @param  $device_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneAdomWorkspaceDirtyDev(
		string $adom = 'root',
		string $device_name,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/dvmdb/adom/{adom}/workspace/dirty/dev/{device_name}', ['adom'=>$adom, 'device_name'=>$device_name], $body);
	}
}
