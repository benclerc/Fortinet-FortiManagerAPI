<?php

/**
 * PHP library used for interacting with Fortinet firewall manager (FortiManager) API (SecurityConsole).
 * @author Benjamin Clerc <contact@benjamin-clerc.com>
 * @copyright Copyright (c) 2021, Benjamin Clerc.
 * @license MIT
 * @link https://github.com/benclerc/Fortinet-FortiManagerAPI
 */

namespace Fortinet\FortiManagerAPI;

use stdClass;

/**
 * FortiManager API SecurityConsole
 * @link https://fndn.fortinet.net/ Fortinet developer ressource center.
 */
class SecurityConsole extends FortiManagerAPI
{
	/**
	 * @route  POST /securityconsole/abort (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execAbort(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/securityconsole/abort', NULL, $body);
	}


	/**
	 * @route  POST /securityconsole/assign/package (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execAssignPackage(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/securityconsole/assign/package', NULL, $body);
	}


	/**
	 * @route  POST /securityconsole/import/dev/objs (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execImportDevObjs(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/securityconsole/import/dev/objs', NULL, $body);
	}


	/**
	 * @route  POST /securityconsole/install/preview (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execInstallPreview(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/securityconsole/install/preview', NULL, $body);
	}


	/**
	 * @route  POST /securityconsole/install/package (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execInstallPackage(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/securityconsole/install/package', NULL, $body);
	}


	/**
	 * @route  POST /securityconsole/install/device (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execInstallDevice(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/securityconsole/install/device', NULL, $body);
	}


	/**
	 * @route  POST /securityconsole/package/commit (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execPackageCommit(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/securityconsole/package/commit', NULL, $body);
	}


	/**
	 * @route  POST /securityconsole/package/cancel/install (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execPackageCancelInstall(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/securityconsole/package/cancel/install', NULL, $body);
	}


	/**
	 * @route  POST /securityconsole/package/clone (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execPackageClone(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/securityconsole/package/clone', NULL, $body);
	}


	/**
	 * @route  POST /securityconsole/package/move (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execPackageMove(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/securityconsole/package/move', NULL, $body);
	}


	/**
	 * @route  POST /securityconsole/pblock/clone (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execPblockClone(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/securityconsole/pblock/clone', NULL, $body);
	}


	/**
	 * @route  POST /securityconsole/preview/result (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execPreviewResult(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/securityconsole/preview/result', NULL, $body);
	}


	/**
	 * @route  POST /securityconsole/reinstall/package (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execReinstallPackage(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/securityconsole/reinstall/package', NULL, $body);
	}


	/**
	 * @route  POST /securityconsole/sign/certificate/template (exec)
	 * @param  $body Request body.
	 * @return stdClass Return the fortimanager's response as an object.
	 */
	public function execSignCertificateTemplate(stdClass $body = null) : stdClass
	{
		return $this->curlRequest('exec', '/securityconsole/sign/certificate/template', NULL, $body);
	}
}
