# Fortinet FortiManager API

_This library is automatically generated, if you want support for a newer version, please open an issue._

PHP library used for interacting with Fortinet firewall manager (FortiManager) APIs (CLI, DeviceManager, PolicyManager, SecurityConsole, System and Task). This library can retrieve, create, update and delete configuration on the FortiManager.

You can find all supported methods on [Fortinet's developer website](https://fndn.fortinet.net/index.php?/fortiapi/5-fortimanager/), you will need an account to browse information.

## Table of contents

<!--ts-->
   * [Getting started](#getting-started)
   * [Documentation](#documentation)
	  * [Config class](#config-class)
		 * [Usage](#usage)
		 * [Examples](#examples)
	  * [CLI, DeviceManager, PolicyManager, SecurityConsole, System and Task classes](#cli-devicemanager-policymanager-securityconsole-system-and-task-classes)
		 * [Usage](#usage)
		 * [Examples](#examples-1)
		 * [Workspace](#workspace)
<!--te-->

## Getting started

1. Get [Composer](http://getcomposer.org/).
2. Install the library using composer `composer require benclerc/fortinet-fortimanagerapi`.
3. Add the following to your application's main PHP file `require 'vendor/autoload.php';`.
4. Instanciate the Config class with the fortimanager's hostname, username and password `$configConnection = new \Fortinet\FortiManagerAPI\Config('123.123.123.123', 'admin', 'password');`.
5. Use the Config object previously created to instanciate the wanted class `$policyManager = new \Fortinet\FortiManagerAPI\PolicyManager($configConnection);`.
6. Start using the library `$globalAddrObj = $policyManager->getGlobalObjectFirewallAddress();`.

## Documentation

You can find a full documentation [here](https://benclerc.github.io/Fortinet-FortiManagerAPI/).

### Config class

#### Usage

This Config class is used to prepare the mandatory configuration information to instanciate and use the different classes. In the constructor you must pass :

1. The fortimanager's hostname (FQDN) or IP address
2. A valid user's username
3. The valid user's password

Optional parameters :

* Timeout : 5000ms. Use `setTimeout()` to change.
* SSL verify peer option : TRUE. Use `setSSLVerifyPeer()` to change.
* SSL verify host option : 2. Use `setSSLVerifyHost()` to change.

#### Examples

```php
// Basic configuration
$configConnection = new \Fortinet\FortiManagerAPI\Config('123.123.123.123', 'admin', 'password');

// Configuration for very slow firewalls/long requests
$configConnection = new \Fortinet\FortiManagerAPI\Config('123.123.123.123', 'admin', 'password');
$configConnection->setTimeout(20000);

// Unsecure configuration
$configConnection = new \Fortinet\FortiManagerAPI\Config('123.123.123.123', 'admin', 'password');
$configConnection->setSSLVerifyPeer(FALSE)->setSSLVerifyHost(FALSE);

// The class logins to the FortiManager when being instanciated hence the try/catch statement.
// Here I use the class PolicyManager for the example but it the same for the other classes.
try {
	$policyManager = new \Fortinet\FortiManagerAPI\PolicyManager($configConnection);
} catch (Exception $e) {
	echo('Handle error : '.$e->getMessage());
}
```

### CLI, DeviceManager, PolicyManager, SecurityConsole, System and Task classes

#### Usage

These classes uses Exception to handle errors, for nominal execution you should instanciate and request methods inside try/catch statements.

#### Examples

```php
// Get an address object named OBJ_IP in global database
try {
	$res = $policyManager->getOneGlobalObjectFirewallAddress('OBJ_IP');
	echo('Subnet is : '.$res->results[0]->subnet[0].'/'.$res->results[0]->subnet[1]);
} catch (Exception $e) {
	echo('Handle error : '.$e->getMessage());
}

// Get an address object named OBJ_IP in 'root' ADOM
try {
	$res = $policyManager->getOneAdomObjectFirewallAddress('root', 'OBJ_IP');
	echo('Subnet is : '.$res->results[0]->subnet[0].'/'.$res->results[0]->subnet[1]);
} catch (Exception $e) {
	echo('Handle error : '.$e->getMessage());
}


// Add a new address object in the global database
// Define the object
$ip = new stdClass;
$ip->name = 'OBJ_IP';
$ip->type = 'ipmask';
$ip->subnet = '10.1.1.0/24';

// Send the request to the FortiManager
try {
	$res = $policyManager->addGlobalObjectFirewallAddress($ip);
	echo('Success !');
} catch (Exception $e) {
	echo('Handle error : '.$e->getMessage());
}

// Add a new address object in 'root' ADOM
// Send the request to the FortiManager
try {
	$res = $policyManager->addAdomObjectFirewallAddress('root', $ip);
	echo('Success !');
} catch (Exception $e) {
	echo('Handle error : '.$e->getMessage());
}
```

#### Workspace

This library also supports workspace locking. It allows to lock the workspace, make changes and then commit thoses changes or unlock without committing (rollback).

```php
// Lock workspace ('root' VDOM)
$policyManager->execAdomWorkspaceLock('root');

// Create many IP objects
$error = FALSE;
for ($i=1; $i < 50; $i++) {
	// Define the object
	$ip = new stdClass;
	$ip->name = 'OBJ_IP'.$i;
	$ip->type = 'ipmask';
	$ip->subnet = '10.1.'.$i.'.0/24';

	// Send the request to the FortiManager
	try {
		$res = $policyManager->addGlobalObjectFirewallAddress($ip);
		echo($ip->name.' Success !');
	} catch (Exception $e) {
		echo('Handle error : '.$e->getMessage());
	}
}

// Check error
if ($error === FALSE) {
	// No errors, commit changes
	$policyManager->execAdomWorkspaceCommit('root');
} else {
	// Errors, abort and rollback
	$policyManager->execAdomWorkspaceUnlock('root');
}
```
