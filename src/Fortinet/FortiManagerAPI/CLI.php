<?php

/**
 * PHP library used for interacting with Fortinet firewall manager (FortiManager) API (CLI).
 * @author Benjamin Clerc <contact@benjamin-clerc.com>
 * @copyright Copyright (c) 2021, Benjamin Clerc.
 * @license MIT
 * @link https://github.com/benclerc/Fortinet-FortiManagerAPI
 */

namespace Fortinet\FortiManagerAPI;

use stdClass;

/**
 * FortiManager API CLI
 * @link https://fndn.fortinet.net/ Fortinet developer ressource center.
 */
class CLI extends FortiManagerAPI
{
	/**
	 * @route  POST /cli/global/_meta_fields/system/admin/user (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalMetaFieldsSystemAdminUser(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/_meta_fields/system/admin/user', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/_meta_fields/system/admin/user (delete)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteGlobalMetaFieldsSystemAdminUser(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/_meta_fields/system/admin/user', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/_meta_fields/system/admin/user (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalMetaFieldsSystemAdminUser(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/_meta_fields/system/admin/user', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/_meta_fields/system/admin/user (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalMetaFieldsSystemAdminUser(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/_meta_fields/system/admin/user', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/_meta_fields/system/admin/user (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalMetaFieldsSystemAdminUser(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/_meta_fields/system/admin/user', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/exec/fgfm/reclaim-dev-tunnel/{device_name} (exec)
	 * @param  $device_name
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execOneGlobalExecFgfmReclaimDevTunnel(string $device_name, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/cli/global/exec/fgfm/reclaim-dev-tunnel/{device_name}', ['device_name'=>$device_name], $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/analyzer/virusreport (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateAnalyzerVirusreport(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/analyzer/virusreport', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/analyzer/virusreport (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateAnalyzerVirusreport(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/analyzer/virusreport', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/analyzer/virusreport (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateAnalyzerVirusreport(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/analyzer/virusreport', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/av-ips/web-proxy (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateAvIpsWebProxy(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/av-ips/web-proxy', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/av-ips/web-proxy (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateAvIpsWebProxy(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/av-ips/web-proxy', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/av-ips/web-proxy (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateAvIpsWebProxy(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/av-ips/web-proxy', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/av-ips/advanced-log (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateAvIpsAdvancedLog(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/av-ips/advanced-log', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/av-ips/advanced-log (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateAvIpsAdvancedLog(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/av-ips/advanced-log', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/av-ips/advanced-log (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateAvIpsAdvancedLog(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/av-ips/advanced-log', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/custom-url-list (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateCustomUrlList(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/custom-url-list', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/custom-url-list (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateCustomUrlList(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/custom-url-list', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/custom-url-list (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateCustomUrlList(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/custom-url-list', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/disk-quota (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateDiskQuota(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/disk-quota', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/disk-quota (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateDiskQuota(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/disk-quota', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/disk-quota (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateDiskQuota(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/disk-quota', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fct-services (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateFctServices(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/fct-services', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fct-services (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateFctServices(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/fct-services', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fct-services (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateFctServices(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/fct-services', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateFdsSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/fds-setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateFdsSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/fds-setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateFdsSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/fds-setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/server-override (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateFdsSettingServerOverride(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/fds-setting/server-override', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/server-override (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateFdsSettingServerOverride(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/fds-setting/server-override', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/server-override (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateFdsSettingServerOverride(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/fds-setting/server-override', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/server-override/servlist (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateFdsSettingServerOverrideServlist(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/fds-setting/server-override/servlist', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/server-override/servlist (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalFmupdateFdsSettingServerOverrideServlist(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/fmupdate/fds-setting/server-override/servlist', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/server-override/servlist (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateFdsSettingServerOverrideServlist(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/fds-setting/server-override/servlist', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/server-override/servlist (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateFdsSettingServerOverrideServlist(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/fds-setting/server-override/servlist', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/server-override/servlist/{servlist} (get)
	 * @param  $servlist
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalFmupdateFdsSettingServerOverrideServlist(
		string $servlist,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/cli/global/fmupdate/fds-setting/server-override/servlist/{servlist}', ['servlist'=>$servlist], $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/server-override/servlist/{servlist} (set)
	 * @param  $servlist
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalFmupdateFdsSettingServerOverrideServlist(
		string $servlist,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('set', '/cli/global/fmupdate/fds-setting/server-override/servlist/{servlist}', ['servlist'=>$servlist], $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/server-override/servlist/{servlist} (update)
	 * @param  $servlist
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalFmupdateFdsSettingServerOverrideServlist(
		string $servlist,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/fmupdate/fds-setting/server-override/servlist/{servlist}', ['servlist'=>$servlist], $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/server-override/servlist/{servlist} (delete)
	 * @param  $servlist
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalFmupdateFdsSettingServerOverrideServlist(
		string $servlist,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/fmupdate/fds-setting/server-override/servlist/{servlist}', ['servlist'=>$servlist], $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/update-schedule (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateFdsSettingUpdateSchedule(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/fds-setting/update-schedule', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/update-schedule (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateFdsSettingUpdateSchedule(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/fds-setting/update-schedule', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/update-schedule (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateFdsSettingUpdateSchedule(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/fds-setting/update-schedule', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/push-override-to-client (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateFdsSettingPushOverrideToClient(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/fds-setting/push-override-to-client', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/push-override-to-client (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateFdsSettingPushOverrideToClient(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/fds-setting/push-override-to-client', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/push-override-to-client (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateFdsSettingPushOverrideToClient(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/fds-setting/push-override-to-client', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/push-override-to-client/announce-ip (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateFdsSettingPushOverrideToClientAnnounceIp(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/fds-setting/push-override-to-client/announce-ip', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/push-override-to-client/announce-ip (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalFmupdateFdsSettingPushOverrideToClientAnnounceIp(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/fmupdate/fds-setting/push-override-to-client/announce-ip', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/push-override-to-client/announce-ip (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateFdsSettingPushOverrideToClientAnnounceIp(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/fds-setting/push-override-to-client/announce-ip', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/push-override-to-client/announce-ip (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateFdsSettingPushOverrideToClientAnnounceIp(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/fds-setting/push-override-to-client/announce-ip', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/push-override-to-client/announce-ip/{announce-ip} (get)
	 * @param  $announceIp
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalFmupdateFdsSettingPushOverrideToClientAnnounceIp(
		string $announceIp,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/cli/global/fmupdate/fds-setting/push-override-to-client/announce-ip/{announce-ip}', ['announce-ip'=>$announceIp], $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/push-override-to-client/announce-ip/{announce-ip} (set)
	 * @param  $announceIp
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalFmupdateFdsSettingPushOverrideToClientAnnounceIp(
		string $announceIp,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('set', '/cli/global/fmupdate/fds-setting/push-override-to-client/announce-ip/{announce-ip}', ['announce-ip'=>$announceIp], $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/push-override-to-client/announce-ip/{announce-ip} (update)
	 * @param  $announceIp
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalFmupdateFdsSettingPushOverrideToClientAnnounceIp(
		string $announceIp,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/fmupdate/fds-setting/push-override-to-client/announce-ip/{announce-ip}', ['announce-ip'=>$announceIp], $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/push-override-to-client/announce-ip/{announce-ip} (delete)
	 * @param  $announceIp
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalFmupdateFdsSettingPushOverrideToClientAnnounceIp(
		string $announceIp,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/fmupdate/fds-setting/push-override-to-client/announce-ip/{announce-ip}', ['announce-ip'=>$announceIp], $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/push-override (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateFdsSettingPushOverride(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/fds-setting/push-override', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/push-override (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateFdsSettingPushOverride(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/fds-setting/push-override', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fds-setting/push-override (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateFdsSettingPushOverride(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/fds-setting/push-override', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fwm-setting (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateFwmSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/fwm-setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fwm-setting (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateFwmSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/fwm-setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/fwm-setting (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateFwmSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/fwm-setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/multilayer (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateMultilayer(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/multilayer', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/multilayer (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateMultilayer(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/multilayer', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/multilayer (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateMultilayer(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/multilayer', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/publicnetwork (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdatePublicnetwork(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/publicnetwork', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/publicnetwork (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdatePublicnetwork(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/publicnetwork', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/publicnetwork (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdatePublicnetwork(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/publicnetwork', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/server-access-priorities (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateServerAccessPriorities(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/server-access-priorities', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/server-access-priorities (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateServerAccessPriorities(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/server-access-priorities', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/server-access-priorities (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateServerAccessPriorities(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/server-access-priorities', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/server-access-priorities/private-server (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateServerAccessPrioritiesPrivateServer(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/server-access-priorities/private-server', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/server-access-priorities/private-server (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalFmupdateServerAccessPrioritiesPrivateServer(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/fmupdate/server-access-priorities/private-server', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/server-access-priorities/private-server (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateServerAccessPrioritiesPrivateServer(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/server-access-priorities/private-server', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/server-access-priorities/private-server (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateServerAccessPrioritiesPrivateServer(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/server-access-priorities/private-server', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/server-access-priorities/private-server/{private-server} (get)
	 * @param  $privateServer
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalFmupdateServerAccessPrioritiesPrivateServer(
		string $privateServer,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/cli/global/fmupdate/server-access-priorities/private-server/{private-server}', ['private-server'=>$privateServer], $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/server-access-priorities/private-server/{private-server} (set)
	 * @param  $privateServer
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalFmupdateServerAccessPrioritiesPrivateServer(
		string $privateServer,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('set', '/cli/global/fmupdate/server-access-priorities/private-server/{private-server}', ['private-server'=>$privateServer], $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/server-access-priorities/private-server/{private-server} (update)
	 * @param  $privateServer
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalFmupdateServerAccessPrioritiesPrivateServer(
		string $privateServer,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/fmupdate/server-access-priorities/private-server/{private-server}', ['private-server'=>$privateServer], $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/server-access-priorities/private-server/{private-server} (delete)
	 * @param  $privateServer
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalFmupdateServerAccessPrioritiesPrivateServer(
		string $privateServer,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/fmupdate/server-access-priorities/private-server/{private-server}', ['private-server'=>$privateServer], $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/server-override-status (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateServerOverrideStatus(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/server-override-status', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/server-override-status (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateServerOverrideStatus(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/server-override-status', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/server-override-status (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateServerOverrideStatus(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/server-override-status', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/service (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateService(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/service', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/service (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateService(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/service', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/service (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateService(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/service', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/web-spam/web-proxy (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateWebSpamWebProxy(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/web-spam/web-proxy', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/web-spam/web-proxy (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateWebSpamWebProxy(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/web-spam/web-proxy', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/web-spam/web-proxy (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateWebSpamWebProxy(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/web-spam/web-proxy', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/web-spam/fgd-setting (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateWebSpamFgdSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/web-spam/fgd-setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/web-spam/fgd-setting (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateWebSpamFgdSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/web-spam/fgd-setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/web-spam/fgd-setting (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateWebSpamFgdSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/web-spam/fgd-setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/web-spam/fgd-setting/server-override (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateWebSpamFgdSettingServerOverride(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/web-spam/fgd-setting/server-override', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/web-spam/fgd-setting/server-override (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateWebSpamFgdSettingServerOverride(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/web-spam/fgd-setting/server-override', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/web-spam/fgd-setting/server-override (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateWebSpamFgdSettingServerOverride(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/web-spam/fgd-setting/server-override', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/web-spam/fgd-setting/server-override/servlist (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalFmupdateWebSpamFgdSettingServerOverrideServlist(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/fmupdate/web-spam/fgd-setting/server-override/servlist', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/web-spam/fgd-setting/server-override/servlist (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalFmupdateWebSpamFgdSettingServerOverrideServlist(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/fmupdate/web-spam/fgd-setting/server-override/servlist', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/web-spam/fgd-setting/server-override/servlist (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalFmupdateWebSpamFgdSettingServerOverrideServlist(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/fmupdate/web-spam/fgd-setting/server-override/servlist', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/web-spam/fgd-setting/server-override/servlist (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalFmupdateWebSpamFgdSettingServerOverrideServlist(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/fmupdate/web-spam/fgd-setting/server-override/servlist', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/web-spam/fgd-setting/server-override/servlist/{servlist} (get)
	 * @param  $servlist
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalFmupdateWebSpamFgdSettingServerOverrideServlist(
		string $servlist,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/cli/global/fmupdate/web-spam/fgd-setting/server-override/servlist/{servlist}', ['servlist'=>$servlist], $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/web-spam/fgd-setting/server-override/servlist/{servlist} (set)
	 * @param  $servlist
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalFmupdateWebSpamFgdSettingServerOverrideServlist(
		string $servlist,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('set', '/cli/global/fmupdate/web-spam/fgd-setting/server-override/servlist/{servlist}', ['servlist'=>$servlist], $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/web-spam/fgd-setting/server-override/servlist/{servlist} (update)
	 * @param  $servlist
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalFmupdateWebSpamFgdSettingServerOverrideServlist(
		string $servlist,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/fmupdate/web-spam/fgd-setting/server-override/servlist/{servlist}', ['servlist'=>$servlist], $body);
	}


	/**
	 * @route  POST /cli/global/fmupdate/web-spam/fgd-setting/server-override/servlist/{servlist} (delete)
	 * @param  $servlist
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalFmupdateWebSpamFgdSettingServerOverrideServlist(
		string $servlist,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/fmupdate/web-spam/fgd-setting/server-override/servlist/{servlist}', ['servlist'=>$servlist], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/profile (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAdminProfile(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/profile', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/profile (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemAdminProfile(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/admin/profile', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/profile (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAdminProfile(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/profile', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/profile (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAdminProfile(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/profile', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/profile/{profile} (get)
	 * @param  $profile
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemAdminProfile(string $profile, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/profile/{profile}', ['profile'=>$profile], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/profile/{profile} (set)
	 * @param  $profile
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemAdminProfile(string $profile, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/profile/{profile}', ['profile'=>$profile], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/profile/{profile} (update)
	 * @param  $profile
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemAdminProfile(string $profile, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/profile/{profile}', ['profile'=>$profile], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/profile/{profile} (delete)
	 * @param  $profile
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemAdminProfile(string $profile, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/admin/profile/{profile}', ['profile'=>$profile], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/profile/{profile}/datamask-custom-fields (get)
	 * @param  $profile
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAdminProfileDatamaskCustomFields(string $profile, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/profile/{profile}/datamask-custom-fields', ['profile'=>$profile], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/profile/{profile}/datamask-custom-fields (add)
	 * @param  $profile
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemAdminProfileDatamaskCustomFields(string $profile, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/admin/profile/{profile}/datamask-custom-fields', ['profile'=>$profile], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/profile/{profile}/datamask-custom-fields (set)
	 * @param  $profile
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAdminProfileDatamaskCustomFields(string $profile, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/profile/{profile}/datamask-custom-fields', ['profile'=>$profile], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/profile/{profile}/datamask-custom-fields (update)
	 * @param  $profile
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAdminProfileDatamaskCustomFields(string $profile, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/profile/{profile}/datamask-custom-fields', ['profile'=>$profile], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/profile/{profile}/datamask-custom-fields/{datamask-custom-fields} (get)
	 * @param  $profile
	 * @param  $datamaskCustomFields
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemAdminProfileDatamaskCustomFields(
		string $profile,
		string $datamaskCustomFields,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/cli/global/system/admin/profile/{profile}/datamask-custom-fields/{datamask-custom-fields}', ['profile'=>$profile, 'datamask-custom-fields'=>$datamaskCustomFields], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/profile/{profile}/datamask-custom-fields/{datamask-custom-fields} (set)
	 * @param  $profile
	 * @param  $datamaskCustomFields
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemAdminProfileDatamaskCustomFields(
		string $profile,
		string $datamaskCustomFields,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('set', '/cli/global/system/admin/profile/{profile}/datamask-custom-fields/{datamask-custom-fields}', ['profile'=>$profile, 'datamask-custom-fields'=>$datamaskCustomFields], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/profile/{profile}/datamask-custom-fields/{datamask-custom-fields} (update)
	 * @param  $profile
	 * @param  $datamaskCustomFields
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemAdminProfileDatamaskCustomFields(
		string $profile,
		string $datamaskCustomFields,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/admin/profile/{profile}/datamask-custom-fields/{datamask-custom-fields}', ['profile'=>$profile, 'datamask-custom-fields'=>$datamaskCustomFields], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/profile/{profile}/datamask-custom-fields/{datamask-custom-fields} (delete)
	 * @param  $profile
	 * @param  $datamaskCustomFields
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemAdminProfileDatamaskCustomFields(
		string $profile,
		string $datamaskCustomFields,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/system/admin/profile/{profile}/datamask-custom-fields/{datamask-custom-fields}', ['profile'=>$profile, 'datamask-custom-fields'=>$datamaskCustomFields], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/radius (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAdminRadius(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/radius', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/radius (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemAdminRadius(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/admin/radius', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/radius (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAdminRadius(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/radius', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/radius (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAdminRadius(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/radius', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/radius/{radius} (get)
	 * @param  $radius
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemAdminRadius(string $radius, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/radius/{radius}', ['radius'=>$radius], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/radius/{radius} (set)
	 * @param  $radius
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemAdminRadius(string $radius, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/radius/{radius}', ['radius'=>$radius], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/radius/{radius} (update)
	 * @param  $radius
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemAdminRadius(string $radius, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/radius/{radius}', ['radius'=>$radius], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/radius/{radius} (delete)
	 * @param  $radius
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemAdminRadius(string $radius, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/admin/radius/{radius}', ['radius'=>$radius], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/ldap (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAdminLdap(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/ldap', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/ldap (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemAdminLdap(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/admin/ldap', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/ldap (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAdminLdap(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/ldap', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/ldap (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAdminLdap(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/ldap', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/ldap/{ldap} (get)
	 * @param  $ldap
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemAdminLdap(string $ldap, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/ldap/{ldap}', ['ldap'=>$ldap], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/ldap/{ldap} (set)
	 * @param  $ldap
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemAdminLdap(string $ldap, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/ldap/{ldap}', ['ldap'=>$ldap], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/ldap/{ldap} (update)
	 * @param  $ldap
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemAdminLdap(string $ldap, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/ldap/{ldap}', ['ldap'=>$ldap], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/ldap/{ldap} (delete)
	 * @param  $ldap
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemAdminLdap(string $ldap, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/admin/ldap/{ldap}', ['ldap'=>$ldap], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/ldap/{ldap}/adom (get)
	 * @param  $ldap
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAdminLdapAdom(string $ldap, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/ldap/{ldap}/adom', ['ldap'=>$ldap], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/ldap/{ldap}/adom (add)
	 * @param  $ldap
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemAdminLdapAdom(string $ldap, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/admin/ldap/{ldap}/adom', ['ldap'=>$ldap], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/ldap/{ldap}/adom (set)
	 * @param  $ldap
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAdminLdapAdom(string $ldap, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/ldap/{ldap}/adom', ['ldap'=>$ldap], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/ldap/{ldap}/adom (update)
	 * @param  $ldap
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAdminLdapAdom(string $ldap, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/ldap/{ldap}/adom', ['ldap'=>$ldap], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/ldap/{ldap}/adom/{adom} (get)
	 * @param  $ldap
	 * @param  $adom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAdminLdapAdomAdom(string $ldap, string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/ldap/{ldap}/adom/{adom}', ['ldap'=>$ldap, 'adom'=>$adom], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/ldap/{ldap}/adom/{adom} (set)
	 * @param  $ldap
	 * @param  $adom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAdminLdapAdomAdom(string $ldap, string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/ldap/{ldap}/adom/{adom}', ['ldap'=>$ldap, 'adom'=>$adom], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/ldap/{ldap}/adom/{adom} (update)
	 * @param  $ldap
	 * @param  $adom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAdminLdapAdomAdom(
		string $ldap,
		string $adom = 'root',
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/admin/ldap/{ldap}/adom/{adom}', ['ldap'=>$ldap, 'adom'=>$adom], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/ldap/{ldap}/adom/{adom} (delete)
	 * @param  $ldap
	 * @param  $adom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteGlobalSystemAdminLdapAdomAdom(
		string $ldap,
		string $adom = 'root',
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/system/admin/ldap/{ldap}/adom/{adom}', ['ldap'=>$ldap, 'adom'=>$adom], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/tacacs (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAdminTacacs(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/tacacs', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/tacacs (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemAdminTacacs(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/admin/tacacs', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/tacacs (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAdminTacacs(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/tacacs', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/tacacs (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAdminTacacs(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/tacacs', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/tacacs/{tacacs} (get)
	 * @param  $tacacs
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemAdminTacacs(string $tacacs, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/tacacs/{tacacs}', ['tacacs'=>$tacacs], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/tacacs/{tacacs} (set)
	 * @param  $tacacs
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemAdminTacacs(string $tacacs, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/tacacs/{tacacs}', ['tacacs'=>$tacacs], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/tacacs/{tacacs} (update)
	 * @param  $tacacs
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemAdminTacacs(string $tacacs, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/tacacs/{tacacs}', ['tacacs'=>$tacacs], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/tacacs/{tacacs} (delete)
	 * @param  $tacacs
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemAdminTacacs(string $tacacs, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/admin/tacacs/{tacacs}', ['tacacs'=>$tacacs], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/group (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAdminGroup(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/group', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/group (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemAdminGroup(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/admin/group', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/group (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAdminGroup(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/group', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/group (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAdminGroup(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/group', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/group/{group} (get)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemAdminGroup(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/group/{group}', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/group/{group} (set)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemAdminGroup(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/group/{group}', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/group/{group} (update)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemAdminGroup(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/group/{group}', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/group/{group} (delete)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemAdminGroup(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/admin/group/{group}', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/group/{group}/member (get)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAdminGroupMember(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/group/{group}/member', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/group/{group}/member (add)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemAdminGroupMember(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/admin/group/{group}/member', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/group/{group}/member (set)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAdminGroupMember(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/group/{group}/member', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/group/{group}/member (update)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAdminGroupMember(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/group/{group}/member', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/group/{group}/member/{member} (get)
	 * @param  $group
	 * @param  $member
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemAdminGroupMember(string $group, string $member, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/group/{group}/member/{member}', ['group'=>$group, 'member'=>$member], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/group/{group}/member/{member} (set)
	 * @param  $group
	 * @param  $member
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemAdminGroupMember(string $group, string $member, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/group/{group}/member/{member}', ['group'=>$group, 'member'=>$member], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/group/{group}/member/{member} (update)
	 * @param  $group
	 * @param  $member
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemAdminGroupMember(string $group, string $member, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/group/{group}/member/{member}', ['group'=>$group, 'member'=>$member], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/group/{group}/member/{member} (delete)
	 * @param  $group
	 * @param  $member
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemAdminGroupMember(string $group, string $member, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/admin/group/{group}/member/{member}', ['group'=>$group, 'member'=>$member], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAdminUser(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/user', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemAdminUser(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/admin/user', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAdminUser(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/user', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAdminUser(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/user', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user} (get)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemAdminUser(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/user/{user}', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user} (set)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemAdminUser(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/user/{user}', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user} (update)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemAdminUser(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/user/{user}', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user} (delete)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemAdminUser(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/admin/user/{user}', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/dashboard (get)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAdminUserDashboard(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/user/{user}/dashboard', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/dashboard (add)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemAdminUserDashboard(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/admin/user/{user}/dashboard', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/dashboard (set)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAdminUserDashboard(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/user/{user}/dashboard', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/dashboard (update)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAdminUserDashboard(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/user/{user}/dashboard', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/dashboard/{dashboard} (get)
	 * @param  $user
	 * @param  $dashboard
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemAdminUserDashboard(string $user, string $dashboard, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/user/{user}/dashboard/{dashboard}', ['user'=>$user, 'dashboard'=>$dashboard], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/dashboard/{dashboard} (set)
	 * @param  $user
	 * @param  $dashboard
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemAdminUserDashboard(string $user, string $dashboard, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/user/{user}/dashboard/{dashboard}', ['user'=>$user, 'dashboard'=>$dashboard], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/dashboard/{dashboard} (update)
	 * @param  $user
	 * @param  $dashboard
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemAdminUserDashboard(
		string $user,
		string $dashboard,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/admin/user/{user}/dashboard/{dashboard}', ['user'=>$user, 'dashboard'=>$dashboard], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/dashboard/{dashboard} (delete)
	 * @param  $user
	 * @param  $dashboard
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemAdminUserDashboard(
		string $user,
		string $dashboard,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/system/admin/user/{user}/dashboard/{dashboard}', ['user'=>$user, 'dashboard'=>$dashboard], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/dashboard-tabs (get)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAdminUserDashboardTabs(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/user/{user}/dashboard-tabs', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/dashboard-tabs (add)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemAdminUserDashboardTabs(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/admin/user/{user}/dashboard-tabs', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/dashboard-tabs (set)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAdminUserDashboardTabs(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/user/{user}/dashboard-tabs', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/dashboard-tabs (update)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAdminUserDashboardTabs(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/user/{user}/dashboard-tabs', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/dashboard-tabs/{dashboard-tabs} (get)
	 * @param  $user
	 * @param  $dashboardTabs
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemAdminUserDashboardTabs(
		string $user,
		string $dashboardTabs,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/cli/global/system/admin/user/{user}/dashboard-tabs/{dashboard-tabs}', ['user'=>$user, 'dashboard-tabs'=>$dashboardTabs], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/dashboard-tabs/{dashboard-tabs} (set)
	 * @param  $user
	 * @param  $dashboardTabs
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemAdminUserDashboardTabs(
		string $user,
		string $dashboardTabs,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('set', '/cli/global/system/admin/user/{user}/dashboard-tabs/{dashboard-tabs}', ['user'=>$user, 'dashboard-tabs'=>$dashboardTabs], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/dashboard-tabs/{dashboard-tabs} (update)
	 * @param  $user
	 * @param  $dashboardTabs
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemAdminUserDashboardTabs(
		string $user,
		string $dashboardTabs,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/admin/user/{user}/dashboard-tabs/{dashboard-tabs}', ['user'=>$user, 'dashboard-tabs'=>$dashboardTabs], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/dashboard-tabs/{dashboard-tabs} (delete)
	 * @param  $user
	 * @param  $dashboardTabs
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemAdminUserDashboardTabs(
		string $user,
		string $dashboardTabs,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/system/admin/user/{user}/dashboard-tabs/{dashboard-tabs}', ['user'=>$user, 'dashboard-tabs'=>$dashboardTabs], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/meta-data (get)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAdminUserMetaData(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/user/{user}/meta-data', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/meta-data (add)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemAdminUserMetaData(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/admin/user/{user}/meta-data', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/meta-data (set)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAdminUserMetaData(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/user/{user}/meta-data', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/meta-data (update)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAdminUserMetaData(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/user/{user}/meta-data', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/meta-data/{meta-data} (get)
	 * @param  $user
	 * @param  $metaData
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemAdminUserMetaData(string $user, string $metaData, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/user/{user}/meta-data/{meta-data}', ['user'=>$user, 'meta-data'=>$metaData], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/meta-data/{meta-data} (set)
	 * @param  $user
	 * @param  $metaData
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemAdminUserMetaData(string $user, string $metaData, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/user/{user}/meta-data/{meta-data}', ['user'=>$user, 'meta-data'=>$metaData], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/meta-data/{meta-data} (update)
	 * @param  $user
	 * @param  $metaData
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemAdminUserMetaData(
		string $user,
		string $metaData,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/admin/user/{user}/meta-data/{meta-data}', ['user'=>$user, 'meta-data'=>$metaData], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/meta-data/{meta-data} (delete)
	 * @param  $user
	 * @param  $metaData
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemAdminUserMetaData(
		string $user,
		string $metaData,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/system/admin/user/{user}/meta-data/{meta-data}', ['user'=>$user, 'meta-data'=>$metaData], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/policy-package (get)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAdminUserPolicyPackage(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/user/{user}/policy-package', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/policy-package (add)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemAdminUserPolicyPackage(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/admin/user/{user}/policy-package', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/policy-package (set)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAdminUserPolicyPackage(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/user/{user}/policy-package', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/policy-package (update)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAdminUserPolicyPackage(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/user/{user}/policy-package', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/policy-package/{policy-package} (get)
	 * @param  $user
	 * @param  $policyPackage
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemAdminUserPolicyPackage(
		string $user,
		string $policyPackage,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/cli/global/system/admin/user/{user}/policy-package/{policy-package}', ['user'=>$user, 'policy-package'=>$policyPackage], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/policy-package/{policy-package} (set)
	 * @param  $user
	 * @param  $policyPackage
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemAdminUserPolicyPackage(
		string $user,
		string $policyPackage,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('set', '/cli/global/system/admin/user/{user}/policy-package/{policy-package}', ['user'=>$user, 'policy-package'=>$policyPackage], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/policy-package/{policy-package} (update)
	 * @param  $user
	 * @param  $policyPackage
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemAdminUserPolicyPackage(
		string $user,
		string $policyPackage,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/admin/user/{user}/policy-package/{policy-package}', ['user'=>$user, 'policy-package'=>$policyPackage], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/policy-package/{policy-package} (delete)
	 * @param  $user
	 * @param  $policyPackage
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemAdminUserPolicyPackage(
		string $user,
		string $policyPackage,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/system/admin/user/{user}/policy-package/{policy-package}', ['user'=>$user, 'policy-package'=>$policyPackage], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/app-filter (get)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAdminUserAppFilter(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/user/{user}/app-filter', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/app-filter (add)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemAdminUserAppFilter(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/admin/user/{user}/app-filter', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/app-filter (set)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAdminUserAppFilter(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/user/{user}/app-filter', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/app-filter (update)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAdminUserAppFilter(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/user/{user}/app-filter', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/app-filter/{app-filter} (get)
	 * @param  $user
	 * @param  $appFilter
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemAdminUserAppFilter(string $user, string $appFilter, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/user/{user}/app-filter/{app-filter}', ['user'=>$user, 'app-filter'=>$appFilter], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/app-filter/{app-filter} (set)
	 * @param  $user
	 * @param  $appFilter
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemAdminUserAppFilter(string $user, string $appFilter, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/user/{user}/app-filter/{app-filter}', ['user'=>$user, 'app-filter'=>$appFilter], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/app-filter/{app-filter} (update)
	 * @param  $user
	 * @param  $appFilter
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemAdminUserAppFilter(
		string $user,
		string $appFilter,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/admin/user/{user}/app-filter/{app-filter}', ['user'=>$user, 'app-filter'=>$appFilter], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/app-filter/{app-filter} (delete)
	 * @param  $user
	 * @param  $appFilter
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemAdminUserAppFilter(
		string $user,
		string $appFilter,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/system/admin/user/{user}/app-filter/{app-filter}', ['user'=>$user, 'app-filter'=>$appFilter], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/ips-filter (get)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAdminUserIpsFilter(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/user/{user}/ips-filter', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/ips-filter (add)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemAdminUserIpsFilter(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/admin/user/{user}/ips-filter', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/ips-filter (set)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAdminUserIpsFilter(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/user/{user}/ips-filter', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/ips-filter (update)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAdminUserIpsFilter(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/user/{user}/ips-filter', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/ips-filter/{ips-filter} (get)
	 * @param  $user
	 * @param  $ipsFilter
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemAdminUserIpsFilter(string $user, string $ipsFilter, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/user/{user}/ips-filter/{ips-filter}', ['user'=>$user, 'ips-filter'=>$ipsFilter], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/ips-filter/{ips-filter} (set)
	 * @param  $user
	 * @param  $ipsFilter
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemAdminUserIpsFilter(string $user, string $ipsFilter, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/user/{user}/ips-filter/{ips-filter}', ['user'=>$user, 'ips-filter'=>$ipsFilter], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/ips-filter/{ips-filter} (update)
	 * @param  $user
	 * @param  $ipsFilter
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemAdminUserIpsFilter(
		string $user,
		string $ipsFilter,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/admin/user/{user}/ips-filter/{ips-filter}', ['user'=>$user, 'ips-filter'=>$ipsFilter], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/ips-filter/{ips-filter} (delete)
	 * @param  $user
	 * @param  $ipsFilter
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemAdminUserIpsFilter(
		string $user,
		string $ipsFilter,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/system/admin/user/{user}/ips-filter/{ips-filter}', ['user'=>$user, 'ips-filter'=>$ipsFilter], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/web-filter (get)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAdminUserWebFilter(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/user/{user}/web-filter', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/web-filter (add)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemAdminUserWebFilter(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/admin/user/{user}/web-filter', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/web-filter (set)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAdminUserWebFilter(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/user/{user}/web-filter', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/web-filter (update)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAdminUserWebFilter(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/user/{user}/web-filter', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/web-filter/{web-filter} (get)
	 * @param  $user
	 * @param  $webFilter
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemAdminUserWebFilter(string $user, string $webFilter, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/user/{user}/web-filter/{web-filter}', ['user'=>$user, 'web-filter'=>$webFilter], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/web-filter/{web-filter} (set)
	 * @param  $user
	 * @param  $webFilter
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemAdminUserWebFilter(string $user, string $webFilter, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/user/{user}/web-filter/{web-filter}', ['user'=>$user, 'web-filter'=>$webFilter], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/web-filter/{web-filter} (update)
	 * @param  $user
	 * @param  $webFilter
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemAdminUserWebFilter(
		string $user,
		string $webFilter,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/admin/user/{user}/web-filter/{web-filter}', ['user'=>$user, 'web-filter'=>$webFilter], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/web-filter/{web-filter} (delete)
	 * @param  $user
	 * @param  $webFilter
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemAdminUserWebFilter(
		string $user,
		string $webFilter,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/system/admin/user/{user}/web-filter/{web-filter}', ['user'=>$user, 'web-filter'=>$webFilter], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/adom-exclude (get)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAdminUserAdomExclude(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/user/{user}/adom-exclude', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/adom-exclude (add)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemAdminUserAdomExclude(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/admin/user/{user}/adom-exclude', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/adom-exclude (set)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAdminUserAdomExclude(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/user/{user}/adom-exclude', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/adom-exclude (update)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAdminUserAdomExclude(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/user/{user}/adom-exclude', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/adom-exclude/{adom-exclude} (get)
	 * @param  $user
	 * @param  $adomExclude
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemAdminUserAdomExclude(
		string $user,
		string $adomExclude,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/cli/global/system/admin/user/{user}/adom-exclude/{adom-exclude}', ['user'=>$user, 'adom-exclude'=>$adomExclude], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/adom-exclude/{adom-exclude} (set)
	 * @param  $user
	 * @param  $adomExclude
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemAdminUserAdomExclude(
		string $user,
		string $adomExclude,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('set', '/cli/global/system/admin/user/{user}/adom-exclude/{adom-exclude}', ['user'=>$user, 'adom-exclude'=>$adomExclude], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/adom-exclude/{adom-exclude} (update)
	 * @param  $user
	 * @param  $adomExclude
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemAdminUserAdomExclude(
		string $user,
		string $adomExclude,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/admin/user/{user}/adom-exclude/{adom-exclude}', ['user'=>$user, 'adom-exclude'=>$adomExclude], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/adom-exclude/{adom-exclude} (delete)
	 * @param  $user
	 * @param  $adomExclude
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemAdminUserAdomExclude(
		string $user,
		string $adomExclude,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/system/admin/user/{user}/adom-exclude/{adom-exclude}', ['user'=>$user, 'adom-exclude'=>$adomExclude], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/adom (get)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAdminUserAdom(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/user/{user}/adom', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/adom (add)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemAdminUserAdom(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/admin/user/{user}/adom', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/adom (set)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAdminUserAdom(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/user/{user}/adom', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/adom (update)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAdminUserAdom(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/user/{user}/adom', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/adom/{adom} (get)
	 * @param  $user
	 * @param  $adom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAdminUserAdomAdom(string $user, string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/user/{user}/adom/{adom}', ['user'=>$user, 'adom'=>$adom], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/adom/{adom} (set)
	 * @param  $user
	 * @param  $adom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAdminUserAdomAdom(string $user, string $adom = 'root', stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/user/{user}/adom/{adom}', ['user'=>$user, 'adom'=>$adom], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/adom/{adom} (update)
	 * @param  $user
	 * @param  $adom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAdminUserAdomAdom(
		string $user,
		string $adom = 'root',
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/admin/user/{user}/adom/{adom}', ['user'=>$user, 'adom'=>$adom], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/user/{user}/adom/{adom} (delete)
	 * @param  $user
	 * @param  $adom
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteGlobalSystemAdminUserAdomAdom(
		string $user,
		string $adom = 'root',
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/system/admin/user/{user}/adom/{adom}', ['user'=>$user, 'adom'=>$adom], $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/setting (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAdminSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/admin/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/setting (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAdminSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/admin/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/admin/setting (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAdminSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/admin/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/alert-console (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAlertConsole(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/alert-console', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/alert-console (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAlertConsole(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/alert-console', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/alert-console (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAlertConsole(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/alert-console', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/alert-event (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAlertEvent(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/alert-event', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/alert-event (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemAlertEvent(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/alert-event', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/alert-event (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAlertEvent(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/alert-event', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/alert-event (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAlertEvent(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/alert-event', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/alert-event/{alert-event} (get)
	 * @param  $alertEvent
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemAlertEvent(string $alertEvent, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/alert-event/{alert-event}', ['alert-event'=>$alertEvent], $body);
	}


	/**
	 * @route  POST /cli/global/system/alert-event/{alert-event} (set)
	 * @param  $alertEvent
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemAlertEvent(string $alertEvent, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/alert-event/{alert-event}', ['alert-event'=>$alertEvent], $body);
	}


	/**
	 * @route  POST /cli/global/system/alert-event/{alert-event} (update)
	 * @param  $alertEvent
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemAlertEvent(string $alertEvent, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/alert-event/{alert-event}', ['alert-event'=>$alertEvent], $body);
	}


	/**
	 * @route  POST /cli/global/system/alert-event/{alert-event} (delete)
	 * @param  $alertEvent
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemAlertEvent(string $alertEvent, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/alert-event/{alert-event}', ['alert-event'=>$alertEvent], $body);
	}


	/**
	 * @route  POST /cli/global/system/alert-event/{alert-event}/alert-destination (get)
	 * @param  $alertEvent
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAlertEventAlertDestination(string $alertEvent, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/alert-event/{alert-event}/alert-destination', ['alert-event'=>$alertEvent], $body);
	}


	/**
	 * @route  POST /cli/global/system/alert-event/{alert-event}/alert-destination (add)
	 * @param  $alertEvent
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemAlertEventAlertDestination(string $alertEvent, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/alert-event/{alert-event}/alert-destination', ['alert-event'=>$alertEvent], $body);
	}


	/**
	 * @route  POST /cli/global/system/alert-event/{alert-event}/alert-destination (set)
	 * @param  $alertEvent
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAlertEventAlertDestination(string $alertEvent, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/alert-event/{alert-event}/alert-destination', ['alert-event'=>$alertEvent], $body);
	}


	/**
	 * @route  POST /cli/global/system/alert-event/{alert-event}/alert-destination (update)
	 * @param  $alertEvent
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAlertEventAlertDestination(string $alertEvent, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/alert-event/{alert-event}/alert-destination', ['alert-event'=>$alertEvent], $body);
	}


	/**
	 * @route  POST /cli/global/system/alert-event/{alert-event}/alert-destination/{alert-destination} (get)
	 * @param  $alertEvent
	 * @param  $alertDestination
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemAlertEventAlertDestination(
		string $alertEvent,
		string $alertDestination,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/cli/global/system/alert-event/{alert-event}/alert-destination/{alert-destination}', ['alert-event'=>$alertEvent, 'alert-destination'=>$alertDestination], $body);
	}


	/**
	 * @route  POST /cli/global/system/alert-event/{alert-event}/alert-destination/{alert-destination} (set)
	 * @param  $alertEvent
	 * @param  $alertDestination
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemAlertEventAlertDestination(
		string $alertEvent,
		string $alertDestination,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('set', '/cli/global/system/alert-event/{alert-event}/alert-destination/{alert-destination}', ['alert-event'=>$alertEvent, 'alert-destination'=>$alertDestination], $body);
	}


	/**
	 * @route  POST /cli/global/system/alert-event/{alert-event}/alert-destination/{alert-destination} (update)
	 * @param  $alertEvent
	 * @param  $alertDestination
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemAlertEventAlertDestination(
		string $alertEvent,
		string $alertDestination,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/alert-event/{alert-event}/alert-destination/{alert-destination}', ['alert-event'=>$alertEvent, 'alert-destination'=>$alertDestination], $body);
	}


	/**
	 * @route  POST /cli/global/system/alert-event/{alert-event}/alert-destination/{alert-destination} (delete)
	 * @param  $alertEvent
	 * @param  $alertDestination
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemAlertEventAlertDestination(
		string $alertEvent,
		string $alertDestination,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/system/alert-event/{alert-event}/alert-destination/{alert-destination}', ['alert-event'=>$alertEvent, 'alert-destination'=>$alertDestination], $body);
	}


	/**
	 * @route  POST /cli/global/system/alertemail (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAlertemail(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/alertemail', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/alertemail (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAlertemail(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/alertemail', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/alertemail (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAlertemail(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/alertemail', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/auto-delete (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAutoDelete(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/auto-delete', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/auto-delete (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAutoDelete(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/auto-delete', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/auto-delete (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAutoDelete(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/auto-delete', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/auto-delete/quarantine-files-auto-deletion (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAutoDeleteQuarantineFilesAutoDeletion(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/auto-delete/quarantine-files-auto-deletion', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/auto-delete/quarantine-files-auto-deletion (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAutoDeleteQuarantineFilesAutoDeletion(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/auto-delete/quarantine-files-auto-deletion', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/auto-delete/quarantine-files-auto-deletion (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAutoDeleteQuarantineFilesAutoDeletion(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/auto-delete/quarantine-files-auto-deletion', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/auto-delete/dlp-files-auto-deletion (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAutoDeleteDlpFilesAutoDeletion(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/auto-delete/dlp-files-auto-deletion', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/auto-delete/dlp-files-auto-deletion (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAutoDeleteDlpFilesAutoDeletion(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/auto-delete/dlp-files-auto-deletion', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/auto-delete/dlp-files-auto-deletion (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAutoDeleteDlpFilesAutoDeletion(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/auto-delete/dlp-files-auto-deletion', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/auto-delete/report-auto-deletion (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAutoDeleteReportAutoDeletion(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/auto-delete/report-auto-deletion', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/auto-delete/report-auto-deletion (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAutoDeleteReportAutoDeletion(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/auto-delete/report-auto-deletion', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/auto-delete/report-auto-deletion (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAutoDeleteReportAutoDeletion(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/auto-delete/report-auto-deletion', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/auto-delete/log-auto-deletion (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemAutoDeleteLogAutoDeletion(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/auto-delete/log-auto-deletion', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/auto-delete/log-auto-deletion (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemAutoDeleteLogAutoDeletion(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/auto-delete/log-auto-deletion', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/auto-delete/log-auto-deletion (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemAutoDeleteLogAutoDeletion(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/auto-delete/log-auto-deletion', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/backup/all-settings (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemBackupAllSettings(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/backup/all-settings', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/backup/all-settings (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemBackupAllSettings(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/backup/all-settings', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/backup/all-settings (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemBackupAllSettings(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/backup/all-settings', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/ca (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemCertificateCa(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/certificate/ca', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/ca (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemCertificateCa(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/certificate/ca', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/ca (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemCertificateCa(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/certificate/ca', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/ca (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemCertificateCa(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/certificate/ca', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/ca/{ca} (get)
	 * @param  $ca
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemCertificateCa(string $ca, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/certificate/ca/{ca}', ['ca'=>$ca], $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/ca/{ca} (set)
	 * @param  $ca
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemCertificateCa(string $ca, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/certificate/ca/{ca}', ['ca'=>$ca], $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/ca/{ca} (update)
	 * @param  $ca
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemCertificateCa(string $ca, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/certificate/ca/{ca}', ['ca'=>$ca], $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/ca/{ca} (delete)
	 * @param  $ca
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemCertificateCa(string $ca, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/certificate/ca/{ca}', ['ca'=>$ca], $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/local (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemCertificateLocal(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/certificate/local', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/local (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemCertificateLocal(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/certificate/local', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/local (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemCertificateLocal(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/certificate/local', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/local (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemCertificateLocal(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/certificate/local', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/local/{local} (get)
	 * @param  $local
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemCertificateLocal(string $local, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/certificate/local/{local}', ['local'=>$local], $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/local/{local} (set)
	 * @param  $local
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemCertificateLocal(string $local, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/certificate/local/{local}', ['local'=>$local], $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/local/{local} (update)
	 * @param  $local
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemCertificateLocal(string $local, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/certificate/local/{local}', ['local'=>$local], $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/local/{local} (delete)
	 * @param  $local
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemCertificateLocal(string $local, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/certificate/local/{local}', ['local'=>$local], $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/crl (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemCertificateCrl(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/certificate/crl', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/crl (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemCertificateCrl(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/certificate/crl', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/crl (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemCertificateCrl(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/certificate/crl', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/crl (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemCertificateCrl(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/certificate/crl', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/crl/{crl} (get)
	 * @param  $crl
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemCertificateCrl(string $crl, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/certificate/crl/{crl}', ['crl'=>$crl], $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/crl/{crl} (set)
	 * @param  $crl
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemCertificateCrl(string $crl, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/certificate/crl/{crl}', ['crl'=>$crl], $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/crl/{crl} (update)
	 * @param  $crl
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemCertificateCrl(string $crl, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/certificate/crl/{crl}', ['crl'=>$crl], $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/crl/{crl} (delete)
	 * @param  $crl
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemCertificateCrl(string $crl, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/certificate/crl/{crl}', ['crl'=>$crl], $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/remote (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemCertificateRemote(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/certificate/remote', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/remote (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemCertificateRemote(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/certificate/remote', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/remote (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemCertificateRemote(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/certificate/remote', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/remote (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemCertificateRemote(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/certificate/remote', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/remote/{remote} (get)
	 * @param  $remote
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemCertificateRemote(string $remote, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/certificate/remote/{remote}', ['remote'=>$remote], $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/remote/{remote} (set)
	 * @param  $remote
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemCertificateRemote(string $remote, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/certificate/remote/{remote}', ['remote'=>$remote], $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/remote/{remote} (update)
	 * @param  $remote
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemCertificateRemote(string $remote, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/certificate/remote/{remote}', ['remote'=>$remote], $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/remote/{remote} (delete)
	 * @param  $remote
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemCertificateRemote(string $remote, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/certificate/remote/{remote}', ['remote'=>$remote], $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/oftp (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemCertificateOftp(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/certificate/oftp', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/oftp (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemCertificateOftp(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/certificate/oftp', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/oftp (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemCertificateOftp(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/certificate/oftp', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/ssh (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemCertificateSsh(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/certificate/ssh', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/ssh (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemCertificateSsh(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/certificate/ssh', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/ssh (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemCertificateSsh(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/certificate/ssh', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/ssh (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemCertificateSsh(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/certificate/ssh', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/ssh/{ssh} (get)
	 * @param  $ssh
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemCertificateSsh(string $ssh, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/certificate/ssh/{ssh}', ['ssh'=>$ssh], $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/ssh/{ssh} (set)
	 * @param  $ssh
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemCertificateSsh(string $ssh, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/certificate/ssh/{ssh}', ['ssh'=>$ssh], $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/ssh/{ssh} (update)
	 * @param  $ssh
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemCertificateSsh(string $ssh, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/certificate/ssh/{ssh}', ['ssh'=>$ssh], $body);
	}


	/**
	 * @route  POST /cli/global/system/certificate/ssh/{ssh} (delete)
	 * @param  $ssh
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemCertificateSsh(string $ssh, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/certificate/ssh/{ssh}', ['ssh'=>$ssh], $body);
	}


	/**
	 * @route  POST /cli/global/system/connector (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemConnector(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/connector', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/connector (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemConnector(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/connector', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/connector (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemConnector(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/connector', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/dm (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemDm(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/dm', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/dm (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemDm(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/dm', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/dm (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemDm(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/dm', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/dns (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemDns(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/dns', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/dns (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemDns(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/dns', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/dns (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemDns(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/dns', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/docker (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemDocker(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/docker', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/docker (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemDocker(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/docker', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/docker (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemDocker(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/docker', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/fips (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemFips(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/fips', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/fips (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemFips(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/fips', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/fips (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemFips(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/fips', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/fortiview/setting (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemFortiviewSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/fortiview/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/fortiview/setting (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemFortiviewSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/fortiview/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/fortiview/setting (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemFortiviewSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/fortiview/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/fortiview/auto-cache (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemFortiviewAutoCache(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/fortiview/auto-cache', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/fortiview/auto-cache (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemFortiviewAutoCache(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/fortiview/auto-cache', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/fortiview/auto-cache (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemFortiviewAutoCache(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/fortiview/auto-cache', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/global (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemGlobal(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/global', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/global (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemGlobal(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/global', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/global (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemGlobal(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/global', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/global/mc-policy-disabled-adoms (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemGlobalMcPolicyDisabledAdoms(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/global/mc-policy-disabled-adoms', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/global/mc-policy-disabled-adoms (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemGlobalMcPolicyDisabledAdoms(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/global/mc-policy-disabled-adoms', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/global/mc-policy-disabled-adoms (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemGlobalMcPolicyDisabledAdoms(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/global/mc-policy-disabled-adoms', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/global/mc-policy-disabled-adoms (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemGlobalMcPolicyDisabledAdoms(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/global/mc-policy-disabled-adoms', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/global/mc-policy-disabled-adoms/{mc-policy-disabled-adoms} (get)
	 * @param  $mcPolicyDisabledAdoms
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemGlobalMcPolicyDisabledAdoms(
		string $mcPolicyDisabledAdoms,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/cli/global/system/global/mc-policy-disabled-adoms/{mc-policy-disabled-adoms}', ['mc-policy-disabled-adoms'=>$mcPolicyDisabledAdoms], $body);
	}


	/**
	 * @route  POST /cli/global/system/global/mc-policy-disabled-adoms/{mc-policy-disabled-adoms} (set)
	 * @param  $mcPolicyDisabledAdoms
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemGlobalMcPolicyDisabledAdoms(
		string $mcPolicyDisabledAdoms,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('set', '/cli/global/system/global/mc-policy-disabled-adoms/{mc-policy-disabled-adoms}', ['mc-policy-disabled-adoms'=>$mcPolicyDisabledAdoms], $body);
	}


	/**
	 * @route  POST /cli/global/system/global/mc-policy-disabled-adoms/{mc-policy-disabled-adoms} (update)
	 * @param  $mcPolicyDisabledAdoms
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemGlobalMcPolicyDisabledAdoms(
		string $mcPolicyDisabledAdoms,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/global/mc-policy-disabled-adoms/{mc-policy-disabled-adoms}', ['mc-policy-disabled-adoms'=>$mcPolicyDisabledAdoms], $body);
	}


	/**
	 * @route  POST /cli/global/system/global/mc-policy-disabled-adoms/{mc-policy-disabled-adoms} (delete)
	 * @param  $mcPolicyDisabledAdoms
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemGlobalMcPolicyDisabledAdoms(
		string $mcPolicyDisabledAdoms,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/system/global/mc-policy-disabled-adoms/{mc-policy-disabled-adoms}', ['mc-policy-disabled-adoms'=>$mcPolicyDisabledAdoms], $body);
	}


	/**
	 * @route  POST /cli/global/system/guiact (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemGuiact(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/guiact', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/guiact (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemGuiact(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/guiact', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/guiact (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemGuiact(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/guiact', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/ha (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemHa(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/ha', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/ha (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemHa(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/ha', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/ha (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemHa(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/ha', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/ha/peer (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemHaPeer(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/ha/peer', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/ha/peer (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemHaPeer(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/ha/peer', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/ha/peer (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemHaPeer(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/ha/peer', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/ha/peer (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemHaPeer(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/ha/peer', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/ha/peer/{peer} (get)
	 * @param  $peer
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemHaPeer(string $peer, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/ha/peer/{peer}', ['peer'=>$peer], $body);
	}


	/**
	 * @route  POST /cli/global/system/ha/peer/{peer} (set)
	 * @param  $peer
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemHaPeer(string $peer, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/ha/peer/{peer}', ['peer'=>$peer], $body);
	}


	/**
	 * @route  POST /cli/global/system/ha/peer/{peer} (update)
	 * @param  $peer
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemHaPeer(string $peer, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/ha/peer/{peer}', ['peer'=>$peer], $body);
	}


	/**
	 * @route  POST /cli/global/system/ha/peer/{peer} (delete)
	 * @param  $peer
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemHaPeer(string $peer, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/ha/peer/{peer}', ['peer'=>$peer], $body);
	}


	/**
	 * @route  POST /cli/global/system/interface (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemInterface(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/interface', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/interface (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemInterface(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/interface', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/interface (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemInterface(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/interface', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/interface (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemInterface(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/interface', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/interface/{interface} (get)
	 * @param  $interface
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemInterface(string $interface, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/interface/{interface}', ['interface'=>$interface], $body);
	}


	/**
	 * @route  POST /cli/global/system/interface/{interface} (set)
	 * @param  $interface
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemInterface(string $interface, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/interface/{interface}', ['interface'=>$interface], $body);
	}


	/**
	 * @route  POST /cli/global/system/interface/{interface} (update)
	 * @param  $interface
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemInterface(string $interface, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/interface/{interface}', ['interface'=>$interface], $body);
	}


	/**
	 * @route  POST /cli/global/system/interface/{interface} (delete)
	 * @param  $interface
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemInterface(string $interface, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/interface/{interface}', ['interface'=>$interface], $body);
	}


	/**
	 * @route  POST /cli/global/system/interface/{interface}/ipv6 (get)
	 * @param  $interface
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemInterfaceIpv6(string $interface, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/interface/{interface}/ipv6', ['interface'=>$interface], $body);
	}


	/**
	 * @route  POST /cli/global/system/interface/{interface}/ipv6 (set)
	 * @param  $interface
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemInterfaceIpv6(string $interface, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/interface/{interface}/ipv6', ['interface'=>$interface], $body);
	}


	/**
	 * @route  POST /cli/global/system/interface/{interface}/ipv6 (update)
	 * @param  $interface
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemInterfaceIpv6(string $interface, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/interface/{interface}/ipv6', ['interface'=>$interface], $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/disk/setting (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLocallogDiskSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/locallog/disk/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/disk/setting (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLocallogDiskSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/locallog/disk/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/disk/setting (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLocallogDiskSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/locallog/disk/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/disk/filter (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLocallogDiskFilter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/locallog/disk/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/disk/filter (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLocallogDiskFilter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/locallog/disk/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/disk/filter (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLocallogDiskFilter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/locallog/disk/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/memory/setting (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLocallogMemorySetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/locallog/memory/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/memory/setting (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLocallogMemorySetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/locallog/memory/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/memory/setting (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLocallogMemorySetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/locallog/memory/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/memory/filter (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLocallogMemoryFilter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/locallog/memory/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/memory/filter (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLocallogMemoryFilter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/locallog/memory/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/memory/filter (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLocallogMemoryFilter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/locallog/memory/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/fortianalyzer/filter (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLocallogFortianalyzerFilter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/locallog/fortianalyzer/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/fortianalyzer/filter (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLocallogFortianalyzerFilter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/locallog/fortianalyzer/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/fortianalyzer/filter (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLocallogFortianalyzerFilter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/locallog/fortianalyzer/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/fortianalyzer/setting (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLocallogFortianalyzerSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/locallog/fortianalyzer/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/fortianalyzer/setting (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLocallogFortianalyzerSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/locallog/fortianalyzer/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/fortianalyzer/setting (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLocallogFortianalyzerSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/locallog/fortianalyzer/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/fortianalyzer2/filter (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLocallogFortianalyzer2Filter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/locallog/fortianalyzer2/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/fortianalyzer2/filter (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLocallogFortianalyzer2Filter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/locallog/fortianalyzer2/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/fortianalyzer2/filter (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLocallogFortianalyzer2Filter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/locallog/fortianalyzer2/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/fortianalyzer2/setting (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLocallogFortianalyzer2Setting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/locallog/fortianalyzer2/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/fortianalyzer2/setting (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLocallogFortianalyzer2Setting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/locallog/fortianalyzer2/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/fortianalyzer2/setting (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLocallogFortianalyzer2Setting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/locallog/fortianalyzer2/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/fortianalyzer3/filter (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLocallogFortianalyzer3Filter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/locallog/fortianalyzer3/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/fortianalyzer3/filter (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLocallogFortianalyzer3Filter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/locallog/fortianalyzer3/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/fortianalyzer3/filter (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLocallogFortianalyzer3Filter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/locallog/fortianalyzer3/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/fortianalyzer3/setting (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLocallogFortianalyzer3Setting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/locallog/fortianalyzer3/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/fortianalyzer3/setting (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLocallogFortianalyzer3Setting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/locallog/fortianalyzer3/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/fortianalyzer3/setting (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLocallogFortianalyzer3Setting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/locallog/fortianalyzer3/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/syslogd/setting (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLocallogSyslogdSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/locallog/syslogd/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/syslogd/setting (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLocallogSyslogdSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/locallog/syslogd/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/syslogd/setting (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLocallogSyslogdSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/locallog/syslogd/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/syslogd/filter (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLocallogSyslogdFilter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/locallog/syslogd/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/syslogd/filter (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLocallogSyslogdFilter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/locallog/syslogd/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/syslogd/filter (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLocallogSyslogdFilter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/locallog/syslogd/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/syslogd2/setting (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLocallogSyslogd2Setting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/locallog/syslogd2/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/syslogd2/setting (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLocallogSyslogd2Setting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/locallog/syslogd2/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/syslogd2/setting (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLocallogSyslogd2Setting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/locallog/syslogd2/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/syslogd2/filter (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLocallogSyslogd2Filter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/locallog/syslogd2/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/syslogd2/filter (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLocallogSyslogd2Filter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/locallog/syslogd2/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/syslogd2/filter (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLocallogSyslogd2Filter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/locallog/syslogd2/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/syslogd3/setting (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLocallogSyslogd3Setting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/locallog/syslogd3/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/syslogd3/setting (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLocallogSyslogd3Setting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/locallog/syslogd3/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/syslogd3/setting (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLocallogSyslogd3Setting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/locallog/syslogd3/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/syslogd3/filter (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLocallogSyslogd3Filter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/locallog/syslogd3/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/syslogd3/filter (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLocallogSyslogd3Filter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/locallog/syslogd3/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/syslogd3/filter (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLocallogSyslogd3Filter(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/locallog/syslogd3/filter', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/setting (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLocallogSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/locallog/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/setting (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLocallogSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/locallog/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/locallog/setting (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLocallogSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/locallog/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/server-settings (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLogFetchServerSettings(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/log-fetch/server-settings', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/server-settings (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLogFetchServerSettings(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/log-fetch/server-settings', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/server-settings (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLogFetchServerSettings(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/log-fetch/server-settings', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLogFetchClientProfile(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/log-fetch/client-profile', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemLogFetchClientProfile(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/log-fetch/client-profile', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLogFetchClientProfile(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/log-fetch/client-profile', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLogFetchClientProfile(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/log-fetch/client-profile', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile/{client-profile} (get)
	 * @param  $clientProfile
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemLogFetchClientProfile(string $clientProfile, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/log-fetch/client-profile/{client-profile}', ['client-profile'=>$clientProfile], $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile/{client-profile} (set)
	 * @param  $clientProfile
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemLogFetchClientProfile(string $clientProfile, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/log-fetch/client-profile/{client-profile}', ['client-profile'=>$clientProfile], $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile/{client-profile} (update)
	 * @param  $clientProfile
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemLogFetchClientProfile(string $clientProfile, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/log-fetch/client-profile/{client-profile}', ['client-profile'=>$clientProfile], $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile/{client-profile} (delete)
	 * @param  $clientProfile
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemLogFetchClientProfile(string $clientProfile, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/log-fetch/client-profile/{client-profile}', ['client-profile'=>$clientProfile], $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile/{client-profile}/log-filter (get)
	 * @param  $clientProfile
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLogFetchClientProfileLogFilter(string $clientProfile, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/log-fetch/client-profile/{client-profile}/log-filter', ['client-profile'=>$clientProfile], $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile/{client-profile}/log-filter (add)
	 * @param  $clientProfile
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemLogFetchClientProfileLogFilter(string $clientProfile, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/log-fetch/client-profile/{client-profile}/log-filter', ['client-profile'=>$clientProfile], $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile/{client-profile}/log-filter (set)
	 * @param  $clientProfile
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLogFetchClientProfileLogFilter(string $clientProfile, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/log-fetch/client-profile/{client-profile}/log-filter', ['client-profile'=>$clientProfile], $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile/{client-profile}/log-filter (update)
	 * @param  $clientProfile
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLogFetchClientProfileLogFilter(
		string $clientProfile,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/log-fetch/client-profile/{client-profile}/log-filter', ['client-profile'=>$clientProfile], $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile/{client-profile}/log-filter/{log-filter} (get)
	 * @param  $clientProfile
	 * @param  $logFilter
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemLogFetchClientProfileLogFilter(
		string $clientProfile,
		string $logFilter,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/cli/global/system/log-fetch/client-profile/{client-profile}/log-filter/{log-filter}', ['client-profile'=>$clientProfile, 'log-filter'=>$logFilter], $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile/{client-profile}/log-filter/{log-filter} (set)
	 * @param  $clientProfile
	 * @param  $logFilter
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemLogFetchClientProfileLogFilter(
		string $clientProfile,
		string $logFilter,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('set', '/cli/global/system/log-fetch/client-profile/{client-profile}/log-filter/{log-filter}', ['client-profile'=>$clientProfile, 'log-filter'=>$logFilter], $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile/{client-profile}/log-filter/{log-filter} (update)
	 * @param  $clientProfile
	 * @param  $logFilter
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemLogFetchClientProfileLogFilter(
		string $clientProfile,
		string $logFilter,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/log-fetch/client-profile/{client-profile}/log-filter/{log-filter}', ['client-profile'=>$clientProfile, 'log-filter'=>$logFilter], $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile/{client-profile}/log-filter/{log-filter} (delete)
	 * @param  $clientProfile
	 * @param  $logFilter
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemLogFetchClientProfileLogFilter(
		string $clientProfile,
		string $logFilter,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/system/log-fetch/client-profile/{client-profile}/log-filter/{log-filter}', ['client-profile'=>$clientProfile, 'log-filter'=>$logFilter], $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile/{client-profile}/device-filter (get)
	 * @param  $clientProfile
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLogFetchClientProfileDeviceFilter(
		string $clientProfile,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/cli/global/system/log-fetch/client-profile/{client-profile}/device-filter', ['client-profile'=>$clientProfile], $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile/{client-profile}/device-filter (add)
	 * @param  $clientProfile
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemLogFetchClientProfileDeviceFilter(
		string $clientProfile,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('add', '/cli/global/system/log-fetch/client-profile/{client-profile}/device-filter', ['client-profile'=>$clientProfile], $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile/{client-profile}/device-filter (set)
	 * @param  $clientProfile
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLogFetchClientProfileDeviceFilter(
		string $clientProfile,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('set', '/cli/global/system/log-fetch/client-profile/{client-profile}/device-filter', ['client-profile'=>$clientProfile], $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile/{client-profile}/device-filter (update)
	 * @param  $clientProfile
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLogFetchClientProfileDeviceFilter(
		string $clientProfile,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/log-fetch/client-profile/{client-profile}/device-filter', ['client-profile'=>$clientProfile], $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile/{client-profile}/device-filter/{device-filter} (get)
	 * @param  $clientProfile
	 * @param  $deviceFilter
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemLogFetchClientProfileDeviceFilter(
		string $clientProfile,
		string $deviceFilter,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/cli/global/system/log-fetch/client-profile/{client-profile}/device-filter/{device-filter}', ['client-profile'=>$clientProfile, 'device-filter'=>$deviceFilter], $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile/{client-profile}/device-filter/{device-filter} (set)
	 * @param  $clientProfile
	 * @param  $deviceFilter
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemLogFetchClientProfileDeviceFilter(
		string $clientProfile,
		string $deviceFilter,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('set', '/cli/global/system/log-fetch/client-profile/{client-profile}/device-filter/{device-filter}', ['client-profile'=>$clientProfile, 'device-filter'=>$deviceFilter], $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile/{client-profile}/device-filter/{device-filter} (update)
	 * @param  $clientProfile
	 * @param  $deviceFilter
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemLogFetchClientProfileDeviceFilter(
		string $clientProfile,
		string $deviceFilter,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/log-fetch/client-profile/{client-profile}/device-filter/{device-filter}', ['client-profile'=>$clientProfile, 'device-filter'=>$deviceFilter], $body);
	}


	/**
	 * @route  POST /cli/global/system/log-fetch/client-profile/{client-profile}/device-filter/{device-filter} (delete)
	 * @param  $clientProfile
	 * @param  $deviceFilter
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemLogFetchClientProfileDeviceFilter(
		string $clientProfile,
		string $deviceFilter,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/system/log-fetch/client-profile/{client-profile}/device-filter/{device-filter}', ['client-profile'=>$clientProfile, 'device-filter'=>$deviceFilter], $body);
	}


	/**
	 * @route  POST /cli/global/system/log/alert (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLogAlert(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/log/alert', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/alert (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLogAlert(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/log/alert', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/alert (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLogAlert(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/log/alert', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/interface-stats (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLogInterfaceStats(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/log/interface-stats', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/interface-stats (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLogInterfaceStats(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/log/interface-stats', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/interface-stats (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLogInterfaceStats(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/log/interface-stats', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/ioc (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLogIoc(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/log/ioc', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/ioc (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLogIoc(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/log/ioc', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/ioc (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLogIoc(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/log/ioc', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/mail-domain (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLogMailDomain(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/log/mail-domain', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/mail-domain (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemLogMailDomain(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/log/mail-domain', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/mail-domain (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLogMailDomain(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/log/mail-domain', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/mail-domain (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLogMailDomain(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/log/mail-domain', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/mail-domain/{mail-domain} (get)
	 * @param  $mailDomain
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemLogMailDomain(string $mailDomain, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/log/mail-domain/{mail-domain}', ['mail-domain'=>$mailDomain], $body);
	}


	/**
	 * @route  POST /cli/global/system/log/mail-domain/{mail-domain} (set)
	 * @param  $mailDomain
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemLogMailDomain(string $mailDomain, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/log/mail-domain/{mail-domain}', ['mail-domain'=>$mailDomain], $body);
	}


	/**
	 * @route  POST /cli/global/system/log/mail-domain/{mail-domain} (update)
	 * @param  $mailDomain
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemLogMailDomain(string $mailDomain, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/log/mail-domain/{mail-domain}', ['mail-domain'=>$mailDomain], $body);
	}


	/**
	 * @route  POST /cli/global/system/log/mail-domain/{mail-domain} (delete)
	 * @param  $mailDomain
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemLogMailDomain(string $mailDomain, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/log/mail-domain/{mail-domain}', ['mail-domain'=>$mailDomain], $body);
	}


	/**
	 * @route  POST /cli/global/system/log/device-disable (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLogDeviceDisable(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/log/device-disable', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/device-disable (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemLogDeviceDisable(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/log/device-disable', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/device-disable (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLogDeviceDisable(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/log/device-disable', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/device-disable (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLogDeviceDisable(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/log/device-disable', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/device-disable/{device-disable} (get)
	 * @param  $deviceDisable
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemLogDeviceDisable(string $deviceDisable, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/log/device-disable/{device-disable}', ['device-disable'=>$deviceDisable], $body);
	}


	/**
	 * @route  POST /cli/global/system/log/device-disable/{device-disable} (set)
	 * @param  $deviceDisable
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemLogDeviceDisable(string $deviceDisable, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/log/device-disable/{device-disable}', ['device-disable'=>$deviceDisable], $body);
	}


	/**
	 * @route  POST /cli/global/system/log/device-disable/{device-disable} (update)
	 * @param  $deviceDisable
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemLogDeviceDisable(string $deviceDisable, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/log/device-disable/{device-disable}', ['device-disable'=>$deviceDisable], $body);
	}


	/**
	 * @route  POST /cli/global/system/log/device-disable/{device-disable} (delete)
	 * @param  $deviceDisable
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemLogDeviceDisable(string $deviceDisable, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/log/device-disable/{device-disable}', ['device-disable'=>$deviceDisable], $body);
	}


	/**
	 * @route  POST /cli/global/system/log/settings (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLogSettings(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/log/settings', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/settings (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLogSettings(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/log/settings', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/settings (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLogSettings(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/log/settings', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/settings/rolling-analyzer (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLogSettingsRollingAnalyzer(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/log/settings/rolling-analyzer', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/settings/rolling-analyzer (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLogSettingsRollingAnalyzer(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/log/settings/rolling-analyzer', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/settings/rolling-analyzer (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLogSettingsRollingAnalyzer(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/log/settings/rolling-analyzer', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/settings/rolling-local (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLogSettingsRollingLocal(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/log/settings/rolling-local', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/settings/rolling-local (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLogSettingsRollingLocal(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/log/settings/rolling-local', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/settings/rolling-local (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLogSettingsRollingLocal(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/log/settings/rolling-local', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/settings/rolling-regular (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemLogSettingsRollingRegular(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/log/settings/rolling-regular', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/settings/rolling-regular (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemLogSettingsRollingRegular(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/log/settings/rolling-regular', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/log/settings/rolling-regular (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemLogSettingsRollingRegular(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/log/settings/rolling-regular', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/mail (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemMail(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/mail', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/mail (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemMail(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/mail', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/mail (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemMail(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/mail', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/mail (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemMail(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/mail', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/mail/{mail} (get)
	 * @param  $mail
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemMail(string $mail, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/mail/{mail}', ['mail'=>$mail], $body);
	}


	/**
	 * @route  POST /cli/global/system/mail/{mail} (set)
	 * @param  $mail
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemMail(string $mail, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/mail/{mail}', ['mail'=>$mail], $body);
	}


	/**
	 * @route  POST /cli/global/system/mail/{mail} (update)
	 * @param  $mail
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemMail(string $mail, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/mail/{mail}', ['mail'=>$mail], $body);
	}


	/**
	 * @route  POST /cli/global/system/mail/{mail} (delete)
	 * @param  $mail
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemMail(string $mail, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/mail/{mail}', ['mail'=>$mail], $body);
	}


	/**
	 * @route  POST /cli/global/system/metadata/admins (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemMetadataAdmins(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/metadata/admins', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/metadata/admins (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemMetadataAdmins(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/metadata/admins', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/metadata/admins (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemMetadataAdmins(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/metadata/admins', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/metadata/admins (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemMetadataAdmins(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/metadata/admins', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/metadata/admins/{admins} (get)
	 * @param  $admins
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemMetadataAdmins(string $admins, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/metadata/admins/{admins}', ['admins'=>$admins], $body);
	}


	/**
	 * @route  POST /cli/global/system/metadata/admins/{admins} (set)
	 * @param  $admins
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemMetadataAdmins(string $admins, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/metadata/admins/{admins}', ['admins'=>$admins], $body);
	}


	/**
	 * @route  POST /cli/global/system/metadata/admins/{admins} (update)
	 * @param  $admins
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemMetadataAdmins(string $admins, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/metadata/admins/{admins}', ['admins'=>$admins], $body);
	}


	/**
	 * @route  POST /cli/global/system/metadata/admins/{admins} (delete)
	 * @param  $admins
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemMetadataAdmins(string $admins, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/metadata/admins/{admins}', ['admins'=>$admins], $body);
	}


	/**
	 * @route  POST /cli/global/system/ntp (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemNtp(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/ntp', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/ntp (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemNtp(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/ntp', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/ntp (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemNtp(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/ntp', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/ntp/ntpserver (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemNtpNtpserver(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/ntp/ntpserver', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/ntp/ntpserver (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemNtpNtpserver(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/ntp/ntpserver', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/ntp/ntpserver (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemNtpNtpserver(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/ntp/ntpserver', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/ntp/ntpserver (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemNtpNtpserver(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/ntp/ntpserver', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/ntp/ntpserver/{ntpserver} (get)
	 * @param  $ntpserver
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemNtpNtpserver(string $ntpserver, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/ntp/ntpserver/{ntpserver}', ['ntpserver'=>$ntpserver], $body);
	}


	/**
	 * @route  POST /cli/global/system/ntp/ntpserver/{ntpserver} (set)
	 * @param  $ntpserver
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemNtpNtpserver(string $ntpserver, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/ntp/ntpserver/{ntpserver}', ['ntpserver'=>$ntpserver], $body);
	}


	/**
	 * @route  POST /cli/global/system/ntp/ntpserver/{ntpserver} (update)
	 * @param  $ntpserver
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemNtpNtpserver(string $ntpserver, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/ntp/ntpserver/{ntpserver}', ['ntpserver'=>$ntpserver], $body);
	}


	/**
	 * @route  POST /cli/global/system/ntp/ntpserver/{ntpserver} (delete)
	 * @param  $ntpserver
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemNtpNtpserver(string $ntpserver, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/ntp/ntpserver/{ntpserver}', ['ntpserver'=>$ntpserver], $body);
	}


	/**
	 * @route  POST /cli/global/system/password-policy (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemPasswordPolicy(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/password-policy', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/password-policy (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemPasswordPolicy(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/password-policy', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/password-policy (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemPasswordPolicy(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/password-policy', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/performance (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemPerformance(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/performance', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/report/est-browse-time (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemReportEstBrowseTime(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/report/est-browse-time', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/report/est-browse-time (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemReportEstBrowseTime(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/report/est-browse-time', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/report/est-browse-time (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemReportEstBrowseTime(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/report/est-browse-time', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/report/auto-cache (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemReportAutoCache(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/report/auto-cache', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/report/auto-cache (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemReportAutoCache(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/report/auto-cache', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/report/auto-cache (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemReportAutoCache(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/report/auto-cache', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/report/setting (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemReportSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/report/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/report/setting (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemReportSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/report/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/report/setting (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemReportSetting(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/report/setting', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemReportGroup(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/report/group', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemReportGroup(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/report/group', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemReportGroup(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/report/group', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemReportGroup(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/report/group', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group/{group} (get)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemReportGroup(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/report/group/{group}', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group/{group} (set)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemReportGroup(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/report/group/{group}', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group/{group} (update)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemReportGroup(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/report/group/{group}', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group/{group} (delete)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemReportGroup(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/report/group/{group}', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group/{group}/chart-alternative (get)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemReportGroupChartAlternative(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/report/group/{group}/chart-alternative', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group/{group}/chart-alternative (add)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemReportGroupChartAlternative(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/report/group/{group}/chart-alternative', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group/{group}/chart-alternative (set)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemReportGroupChartAlternative(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/report/group/{group}/chart-alternative', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group/{group}/chart-alternative (update)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemReportGroupChartAlternative(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/report/group/{group}/chart-alternative', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group/{group}/chart-alternative/{chart-alternative} (get)
	 * @param  $group
	 * @param  $chartAlternative
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemReportGroupChartAlternative(
		string $group,
		string $chartAlternative,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/cli/global/system/report/group/{group}/chart-alternative/{chart-alternative}', ['group'=>$group, 'chart-alternative'=>$chartAlternative], $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group/{group}/chart-alternative/{chart-alternative} (set)
	 * @param  $group
	 * @param  $chartAlternative
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemReportGroupChartAlternative(
		string $group,
		string $chartAlternative,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('set', '/cli/global/system/report/group/{group}/chart-alternative/{chart-alternative}', ['group'=>$group, 'chart-alternative'=>$chartAlternative], $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group/{group}/chart-alternative/{chart-alternative} (update)
	 * @param  $group
	 * @param  $chartAlternative
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemReportGroupChartAlternative(
		string $group,
		string $chartAlternative,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/report/group/{group}/chart-alternative/{chart-alternative}', ['group'=>$group, 'chart-alternative'=>$chartAlternative], $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group/{group}/chart-alternative/{chart-alternative} (delete)
	 * @param  $group
	 * @param  $chartAlternative
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemReportGroupChartAlternative(
		string $group,
		string $chartAlternative,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/system/report/group/{group}/chart-alternative/{chart-alternative}', ['group'=>$group, 'chart-alternative'=>$chartAlternative], $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group/{group}/group-by (get)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemReportGroupGroupBy(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/report/group/{group}/group-by', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group/{group}/group-by (add)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemReportGroupGroupBy(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/report/group/{group}/group-by', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group/{group}/group-by (set)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemReportGroupGroupBy(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/report/group/{group}/group-by', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group/{group}/group-by (update)
	 * @param  $group
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemReportGroupGroupBy(string $group, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/report/group/{group}/group-by', ['group'=>$group], $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group/{group}/group-by/{group-by} (get)
	 * @param  $group
	 * @param  $groupBy
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemReportGroupGroupBy(string $group, string $groupBy, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/report/group/{group}/group-by/{group-by}', ['group'=>$group, 'group-by'=>$groupBy], $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group/{group}/group-by/{group-by} (set)
	 * @param  $group
	 * @param  $groupBy
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemReportGroupGroupBy(string $group, string $groupBy, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/report/group/{group}/group-by/{group-by}', ['group'=>$group, 'group-by'=>$groupBy], $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group/{group}/group-by/{group-by} (update)
	 * @param  $group
	 * @param  $groupBy
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemReportGroupGroupBy(
		string $group,
		string $groupBy,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/report/group/{group}/group-by/{group-by}', ['group'=>$group, 'group-by'=>$groupBy], $body);
	}


	/**
	 * @route  POST /cli/global/system/report/group/{group}/group-by/{group-by} (delete)
	 * @param  $group
	 * @param  $groupBy
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemReportGroupGroupBy(
		string $group,
		string $groupBy,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/system/report/group/{group}/group-by/{group-by}', ['group'=>$group, 'group-by'=>$groupBy], $body);
	}


	/**
	 * @route  POST /cli/global/system/route (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemRoute(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/route', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/route (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemRoute(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/route', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/route (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemRoute(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/route', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/route (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemRoute(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/route', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/route/{route} (get)
	 * @param  $route
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemRoute(string $route, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/route/{route}', ['route'=>$route], $body);
	}


	/**
	 * @route  POST /cli/global/system/route/{route} (set)
	 * @param  $route
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemRoute(string $route, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/route/{route}', ['route'=>$route], $body);
	}


	/**
	 * @route  POST /cli/global/system/route/{route} (update)
	 * @param  $route
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemRoute(string $route, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/route/{route}', ['route'=>$route], $body);
	}


	/**
	 * @route  POST /cli/global/system/route/{route} (delete)
	 * @param  $route
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemRoute(string $route, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/route/{route}', ['route'=>$route], $body);
	}


	/**
	 * @route  POST /cli/global/system/route6 (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemRoute6(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/route6', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/route6 (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemRoute6(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/route6', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/route6 (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemRoute6(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/route6', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/route6 (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemRoute6(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/route6', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/route6/{route6} (get)
	 * @param  $route6
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemRoute6(string $route6, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/route6/{route6}', ['route6'=>$route6], $body);
	}


	/**
	 * @route  POST /cli/global/system/route6/{route6} (set)
	 * @param  $route6
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemRoute6(string $route6, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/route6/{route6}', ['route6'=>$route6], $body);
	}


	/**
	 * @route  POST /cli/global/system/route6/{route6} (update)
	 * @param  $route6
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemRoute6(string $route6, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/route6/{route6}', ['route6'=>$route6], $body);
	}


	/**
	 * @route  POST /cli/global/system/route6/{route6} (delete)
	 * @param  $route6
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemRoute6(string $route6, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/route6/{route6}', ['route6'=>$route6], $body);
	}


	/**
	 * @route  POST /cli/global/system/saml (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemSaml(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/saml', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/saml (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemSaml(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/saml', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/saml (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemSaml(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/saml', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/saml/fabric-idp (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemSamlFabricIdp(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/saml/fabric-idp', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/saml/fabric-idp (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemSamlFabricIdp(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/saml/fabric-idp', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/saml/fabric-idp (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemSamlFabricIdp(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/saml/fabric-idp', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/saml/fabric-idp (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemSamlFabricIdp(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/saml/fabric-idp', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/saml/fabric-idp/{fabric-idp} (get)
	 * @param  $fabricIdp
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemSamlFabricIdp(string $fabricIdp, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/saml/fabric-idp/{fabric-idp}', ['fabric-idp'=>$fabricIdp], $body);
	}


	/**
	 * @route  POST /cli/global/system/saml/fabric-idp/{fabric-idp} (set)
	 * @param  $fabricIdp
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemSamlFabricIdp(string $fabricIdp, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/saml/fabric-idp/{fabric-idp}', ['fabric-idp'=>$fabricIdp], $body);
	}


	/**
	 * @route  POST /cli/global/system/saml/fabric-idp/{fabric-idp} (update)
	 * @param  $fabricIdp
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemSamlFabricIdp(string $fabricIdp, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/saml/fabric-idp/{fabric-idp}', ['fabric-idp'=>$fabricIdp], $body);
	}


	/**
	 * @route  POST /cli/global/system/saml/fabric-idp/{fabric-idp} (delete)
	 * @param  $fabricIdp
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemSamlFabricIdp(string $fabricIdp, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/saml/fabric-idp/{fabric-idp}', ['fabric-idp'=>$fabricIdp], $body);
	}


	/**
	 * @route  POST /cli/global/system/saml/service-providers (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemSamlServiceProviders(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/saml/service-providers', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/saml/service-providers (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemSamlServiceProviders(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/saml/service-providers', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/saml/service-providers (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemSamlServiceProviders(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/saml/service-providers', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/saml/service-providers (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemSamlServiceProviders(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/saml/service-providers', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/saml/service-providers/{service-providers} (get)
	 * @param  $serviceProviders
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemSamlServiceProviders(string $serviceProviders, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/saml/service-providers/{service-providers}', ['service-providers'=>$serviceProviders], $body);
	}


	/**
	 * @route  POST /cli/global/system/saml/service-providers/{service-providers} (set)
	 * @param  $serviceProviders
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemSamlServiceProviders(string $serviceProviders, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/saml/service-providers/{service-providers}', ['service-providers'=>$serviceProviders], $body);
	}


	/**
	 * @route  POST /cli/global/system/saml/service-providers/{service-providers} (update)
	 * @param  $serviceProviders
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemSamlServiceProviders(string $serviceProviders, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/saml/service-providers/{service-providers}', ['service-providers'=>$serviceProviders], $body);
	}


	/**
	 * @route  POST /cli/global/system/saml/service-providers/{service-providers} (delete)
	 * @param  $serviceProviders
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemSamlServiceProviders(string $serviceProviders, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/saml/service-providers/{service-providers}', ['service-providers'=>$serviceProviders], $body);
	}


	/**
	 * @route  POST /cli/global/system/sniffer (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemSniffer(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/sniffer', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/sniffer (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemSniffer(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/sniffer', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/sniffer (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemSniffer(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/sniffer', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/sniffer (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemSniffer(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/sniffer', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/sniffer/{sniffer} (get)
	 * @param  $sniffer
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemSniffer(string $sniffer, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/sniffer/{sniffer}', ['sniffer'=>$sniffer], $body);
	}


	/**
	 * @route  POST /cli/global/system/sniffer/{sniffer} (set)
	 * @param  $sniffer
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemSniffer(string $sniffer, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/sniffer/{sniffer}', ['sniffer'=>$sniffer], $body);
	}


	/**
	 * @route  POST /cli/global/system/sniffer/{sniffer} (update)
	 * @param  $sniffer
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemSniffer(string $sniffer, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/sniffer/{sniffer}', ['sniffer'=>$sniffer], $body);
	}


	/**
	 * @route  POST /cli/global/system/sniffer/{sniffer} (delete)
	 * @param  $sniffer
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemSniffer(string $sniffer, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/sniffer/{sniffer}', ['sniffer'=>$sniffer], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/sysinfo (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemSnmpSysinfo(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/snmp/sysinfo', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/sysinfo (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemSnmpSysinfo(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/snmp/sysinfo', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/sysinfo (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemSnmpSysinfo(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/snmp/sysinfo', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemSnmpCommunity(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/snmp/community', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemSnmpCommunity(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/snmp/community', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemSnmpCommunity(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/snmp/community', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemSnmpCommunity(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/snmp/community', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community/{community} (get)
	 * @param  $community
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemSnmpCommunity(string $community, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/snmp/community/{community}', ['community'=>$community], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community/{community} (set)
	 * @param  $community
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemSnmpCommunity(string $community, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/snmp/community/{community}', ['community'=>$community], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community/{community} (update)
	 * @param  $community
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemSnmpCommunity(string $community, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/snmp/community/{community}', ['community'=>$community], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community/{community} (delete)
	 * @param  $community
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemSnmpCommunity(string $community, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/snmp/community/{community}', ['community'=>$community], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community/{community}/hosts6 (get)
	 * @param  $community
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemSnmpCommunityHosts6(string $community, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/snmp/community/{community}/hosts6', ['community'=>$community], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community/{community}/hosts6 (add)
	 * @param  $community
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemSnmpCommunityHosts6(string $community, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/snmp/community/{community}/hosts6', ['community'=>$community], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community/{community}/hosts6 (set)
	 * @param  $community
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemSnmpCommunityHosts6(string $community, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/snmp/community/{community}/hosts6', ['community'=>$community], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community/{community}/hosts6 (update)
	 * @param  $community
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemSnmpCommunityHosts6(string $community, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/snmp/community/{community}/hosts6', ['community'=>$community], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community/{community}/hosts6/{hosts6} (get)
	 * @param  $community
	 * @param  $hosts6
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemSnmpCommunityHosts6(
		string $community,
		string $hosts6,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/cli/global/system/snmp/community/{community}/hosts6/{hosts6}', ['community'=>$community, 'hosts6'=>$hosts6], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community/{community}/hosts6/{hosts6} (set)
	 * @param  $community
	 * @param  $hosts6
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemSnmpCommunityHosts6(
		string $community,
		string $hosts6,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('set', '/cli/global/system/snmp/community/{community}/hosts6/{hosts6}', ['community'=>$community, 'hosts6'=>$hosts6], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community/{community}/hosts6/{hosts6} (update)
	 * @param  $community
	 * @param  $hosts6
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemSnmpCommunityHosts6(
		string $community,
		string $hosts6,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/snmp/community/{community}/hosts6/{hosts6}', ['community'=>$community, 'hosts6'=>$hosts6], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community/{community}/hosts6/{hosts6} (delete)
	 * @param  $community
	 * @param  $hosts6
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemSnmpCommunityHosts6(
		string $community,
		string $hosts6,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/system/snmp/community/{community}/hosts6/{hosts6}', ['community'=>$community, 'hosts6'=>$hosts6], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community/{community}/hosts (get)
	 * @param  $community
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemSnmpCommunityHosts(string $community, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/snmp/community/{community}/hosts', ['community'=>$community], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community/{community}/hosts (add)
	 * @param  $community
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemSnmpCommunityHosts(string $community, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/snmp/community/{community}/hosts', ['community'=>$community], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community/{community}/hosts (set)
	 * @param  $community
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemSnmpCommunityHosts(string $community, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/snmp/community/{community}/hosts', ['community'=>$community], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community/{community}/hosts (update)
	 * @param  $community
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemSnmpCommunityHosts(string $community, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/snmp/community/{community}/hosts', ['community'=>$community], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community/{community}/hosts/{hosts} (get)
	 * @param  $community
	 * @param  $hosts
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemSnmpCommunityHosts(
		string $community,
		string $hosts,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/cli/global/system/snmp/community/{community}/hosts/{hosts}', ['community'=>$community, 'hosts'=>$hosts], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community/{community}/hosts/{hosts} (set)
	 * @param  $community
	 * @param  $hosts
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemSnmpCommunityHosts(
		string $community,
		string $hosts,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('set', '/cli/global/system/snmp/community/{community}/hosts/{hosts}', ['community'=>$community, 'hosts'=>$hosts], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community/{community}/hosts/{hosts} (update)
	 * @param  $community
	 * @param  $hosts
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemSnmpCommunityHosts(
		string $community,
		string $hosts,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/snmp/community/{community}/hosts/{hosts}', ['community'=>$community, 'hosts'=>$hosts], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/community/{community}/hosts/{hosts} (delete)
	 * @param  $community
	 * @param  $hosts
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemSnmpCommunityHosts(
		string $community,
		string $hosts,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/system/snmp/community/{community}/hosts/{hosts}', ['community'=>$community, 'hosts'=>$hosts], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/user (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemSnmpUser(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/snmp/user', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/user (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemSnmpUser(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/snmp/user', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/user (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemSnmpUser(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/snmp/user', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/user (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemSnmpUser(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/snmp/user', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/user/{user} (get)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemSnmpUser(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/snmp/user/{user}', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/user/{user} (set)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemSnmpUser(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/snmp/user/{user}', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/user/{user} (update)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemSnmpUser(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/snmp/user/{user}', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/snmp/user/{user} (delete)
	 * @param  $user
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemSnmpUser(string $user, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/snmp/user/{user}', ['user'=>$user], $body);
	}


	/**
	 * @route  POST /cli/global/system/sql (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemSql(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/sql', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/sql (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemSql(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/sql', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/sql (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemSql(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/sql', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/ts-index-field (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemSqlTsIndexField(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/sql/ts-index-field', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/ts-index-field (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemSqlTsIndexField(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/sql/ts-index-field', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/ts-index-field (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemSqlTsIndexField(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/sql/ts-index-field', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/ts-index-field (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemSqlTsIndexField(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/sql/ts-index-field', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/ts-index-field/{ts-index-field} (get)
	 * @param  $tsIndexField
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemSqlTsIndexField(string $tsIndexField, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/sql/ts-index-field/{ts-index-field}', ['ts-index-field'=>$tsIndexField], $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/ts-index-field/{ts-index-field} (set)
	 * @param  $tsIndexField
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemSqlTsIndexField(string $tsIndexField, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/sql/ts-index-field/{ts-index-field}', ['ts-index-field'=>$tsIndexField], $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/ts-index-field/{ts-index-field} (update)
	 * @param  $tsIndexField
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemSqlTsIndexField(string $tsIndexField, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/sql/ts-index-field/{ts-index-field}', ['ts-index-field'=>$tsIndexField], $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/ts-index-field/{ts-index-field} (delete)
	 * @param  $tsIndexField
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemSqlTsIndexField(string $tsIndexField, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/sql/ts-index-field/{ts-index-field}', ['ts-index-field'=>$tsIndexField], $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/custom-skipidx (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemSqlCustomSkipidx(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/sql/custom-skipidx', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/custom-skipidx (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemSqlCustomSkipidx(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/sql/custom-skipidx', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/custom-skipidx (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemSqlCustomSkipidx(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/sql/custom-skipidx', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/custom-skipidx (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemSqlCustomSkipidx(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/sql/custom-skipidx', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/custom-skipidx/{custom-skipidx} (get)
	 * @param  $customSkipidx
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemSqlCustomSkipidx(string $customSkipidx, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/sql/custom-skipidx/{custom-skipidx}', ['custom-skipidx'=>$customSkipidx], $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/custom-skipidx/{custom-skipidx} (set)
	 * @param  $customSkipidx
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemSqlCustomSkipidx(string $customSkipidx, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/sql/custom-skipidx/{custom-skipidx}', ['custom-skipidx'=>$customSkipidx], $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/custom-skipidx/{custom-skipidx} (update)
	 * @param  $customSkipidx
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemSqlCustomSkipidx(string $customSkipidx, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/sql/custom-skipidx/{custom-skipidx}', ['custom-skipidx'=>$customSkipidx], $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/custom-skipidx/{custom-skipidx} (delete)
	 * @param  $customSkipidx
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemSqlCustomSkipidx(string $customSkipidx, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/sql/custom-skipidx/{custom-skipidx}', ['custom-skipidx'=>$customSkipidx], $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/custom-index (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemSqlCustomIndex(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/sql/custom-index', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/custom-index (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemSqlCustomIndex(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/sql/custom-index', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/custom-index (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemSqlCustomIndex(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/sql/custom-index', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/custom-index (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemSqlCustomIndex(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/sql/custom-index', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/custom-index/{custom-index} (get)
	 * @param  $customIndex
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemSqlCustomIndex(string $customIndex, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/sql/custom-index/{custom-index}', ['custom-index'=>$customIndex], $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/custom-index/{custom-index} (set)
	 * @param  $customIndex
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemSqlCustomIndex(string $customIndex, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/sql/custom-index/{custom-index}', ['custom-index'=>$customIndex], $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/custom-index/{custom-index} (update)
	 * @param  $customIndex
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemSqlCustomIndex(string $customIndex, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/sql/custom-index/{custom-index}', ['custom-index'=>$customIndex], $body);
	}


	/**
	 * @route  POST /cli/global/system/sql/custom-index/{custom-index} (delete)
	 * @param  $customIndex
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemSqlCustomIndex(string $customIndex, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/sql/custom-index/{custom-index}', ['custom-index'=>$customIndex], $body);
	}


	/**
	 * @route  POST /cli/global/system/status (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemStatus(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/status', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/syslog (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemSyslog(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/syslog', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/syslog (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemSyslog(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/syslog', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/syslog (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemSyslog(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/syslog', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/syslog (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemSyslog(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/syslog', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/syslog/{syslog} (get)
	 * @param  $syslog
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemSyslog(string $syslog, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/syslog/{syslog}', ['syslog'=>$syslog], $body);
	}


	/**
	 * @route  POST /cli/global/system/syslog/{syslog} (set)
	 * @param  $syslog
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemSyslog(string $syslog, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/syslog/{syslog}', ['syslog'=>$syslog], $body);
	}


	/**
	 * @route  POST /cli/global/system/syslog/{syslog} (update)
	 * @param  $syslog
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemSyslog(string $syslog, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/syslog/{syslog}', ['syslog'=>$syslog], $body);
	}


	/**
	 * @route  POST /cli/global/system/syslog/{syslog} (delete)
	 * @param  $syslog
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemSyslog(string $syslog, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/syslog/{syslog}', ['syslog'=>$syslog], $body);
	}


	/**
	 * @route  POST /cli/global/system/workflow/approval-matrix (get)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemWorkflowApprovalMatrix(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/workflow/approval-matrix', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/workflow/approval-matrix (add)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemWorkflowApprovalMatrix(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/workflow/approval-matrix', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/workflow/approval-matrix (set)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemWorkflowApprovalMatrix(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/workflow/approval-matrix', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/workflow/approval-matrix (update)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemWorkflowApprovalMatrix(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/workflow/approval-matrix', NULL, $body);
	}


	/**
	 * @route  POST /cli/global/system/workflow/approval-matrix/{approval-matrix} (get)
	 * @param  $approvalMatrix
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemWorkflowApprovalMatrix(string $approvalMatrix, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/workflow/approval-matrix/{approval-matrix}', ['approval-matrix'=>$approvalMatrix], $body);
	}


	/**
	 * @route  POST /cli/global/system/workflow/approval-matrix/{approval-matrix} (set)
	 * @param  $approvalMatrix
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemWorkflowApprovalMatrix(string $approvalMatrix, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/workflow/approval-matrix/{approval-matrix}', ['approval-matrix'=>$approvalMatrix], $body);
	}


	/**
	 * @route  POST /cli/global/system/workflow/approval-matrix/{approval-matrix} (update)
	 * @param  $approvalMatrix
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemWorkflowApprovalMatrix(string $approvalMatrix, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('update', '/cli/global/system/workflow/approval-matrix/{approval-matrix}', ['approval-matrix'=>$approvalMatrix], $body);
	}


	/**
	 * @route  POST /cli/global/system/workflow/approval-matrix/{approval-matrix} (delete)
	 * @param  $approvalMatrix
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemWorkflowApprovalMatrix(string $approvalMatrix, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('delete', '/cli/global/system/workflow/approval-matrix/{approval-matrix}', ['approval-matrix'=>$approvalMatrix], $body);
	}


	/**
	 * @route  POST /cli/global/system/workflow/approval-matrix/{approval-matrix}/approver (get)
	 * @param  $approvalMatrix
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getGlobalSystemWorkflowApprovalMatrixApprover(string $approvalMatrix, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('get', '/cli/global/system/workflow/approval-matrix/{approval-matrix}/approver', ['approval-matrix'=>$approvalMatrix], $body);
	}


	/**
	 * @route  POST /cli/global/system/workflow/approval-matrix/{approval-matrix}/approver (add)
	 * @param  $approvalMatrix
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function addGlobalSystemWorkflowApprovalMatrixApprover(string $approvalMatrix, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('add', '/cli/global/system/workflow/approval-matrix/{approval-matrix}/approver', ['approval-matrix'=>$approvalMatrix], $body);
	}


	/**
	 * @route  POST /cli/global/system/workflow/approval-matrix/{approval-matrix}/approver (set)
	 * @param  $approvalMatrix
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setGlobalSystemWorkflowApprovalMatrixApprover(string $approvalMatrix, stdClass $body = null) : stdClass
	{
		return $this->curlRequest('set', '/cli/global/system/workflow/approval-matrix/{approval-matrix}/approver', ['approval-matrix'=>$approvalMatrix], $body);
	}


	/**
	 * @route  POST /cli/global/system/workflow/approval-matrix/{approval-matrix}/approver (update)
	 * @param  $approvalMatrix
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateGlobalSystemWorkflowApprovalMatrixApprover(
		string $approvalMatrix,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/workflow/approval-matrix/{approval-matrix}/approver', ['approval-matrix'=>$approvalMatrix], $body);
	}


	/**
	 * @route  POST /cli/global/system/workflow/approval-matrix/{approval-matrix}/approver/{approver} (get)
	 * @param  $approvalMatrix
	 * @param  $approver
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function getOneGlobalSystemWorkflowApprovalMatrixApprover(
		string $approvalMatrix,
		string $approver,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('get', '/cli/global/system/workflow/approval-matrix/{approval-matrix}/approver/{approver}', ['approval-matrix'=>$approvalMatrix, 'approver'=>$approver], $body);
	}


	/**
	 * @route  POST /cli/global/system/workflow/approval-matrix/{approval-matrix}/approver/{approver} (set)
	 * @param  $approvalMatrix
	 * @param  $approver
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function setOneGlobalSystemWorkflowApprovalMatrixApprover(
		string $approvalMatrix,
		string $approver,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('set', '/cli/global/system/workflow/approval-matrix/{approval-matrix}/approver/{approver}', ['approval-matrix'=>$approvalMatrix, 'approver'=>$approver], $body);
	}


	/**
	 * @route  POST /cli/global/system/workflow/approval-matrix/{approval-matrix}/approver/{approver} (update)
	 * @param  $approvalMatrix
	 * @param  $approver
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function updateOneGlobalSystemWorkflowApprovalMatrixApprover(
		string $approvalMatrix,
		string $approver,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('update', '/cli/global/system/workflow/approval-matrix/{approval-matrix}/approver/{approver}', ['approval-matrix'=>$approvalMatrix, 'approver'=>$approver], $body);
	}


	/**
	 * @route  POST /cli/global/system/workflow/approval-matrix/{approval-matrix}/approver/{approver} (delete)
	 * @param  $approvalMatrix
	 * @param  $approver
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function deleteOneGlobalSystemWorkflowApprovalMatrixApprover(
		string $approvalMatrix,
		string $approver,
		stdClass $body = null
	) : stdClass {
		return $this->curlRequest('delete', '/cli/global/system/workflow/approval-matrix/{approval-matrix}/approver/{approver}', ['approval-matrix'=>$approvalMatrix, 'approver'=>$approver], $body);
	}
}
