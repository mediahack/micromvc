<?php
/**
 * Config
 *
 * Core system configuration file
 *
 * @package		MicroMVC
 * @author		David Pennington
 * @copyright	(c) 2010 MicroMVC Framework
 * @license		http://micromvc.com/license
 ********************************** 80 Columns *********************************
 */

// Default controller
$config['index'] = 'example/index';

// Default 404 controller
$config['404'] = 'example/404';

// Base site url
$config['site_url'] = '/';

// Enable debug mode?
$config['debug_mode'] = TRUE;

// Current theme
$config['theme'] = 'theme';

// Load init file?
$config['init'] = FALSE;

// Path to log directory
$config['log_path'] = 'system/log/';

// Default language file
$config['language'] = 'en';

/**
 * Database
 * 
 * This system uses PDO to connect to MySQL, SQLite, or PostgreSQL.
 * Visit http://us3.php.net/manual/en/pdo.drivers.php for more info.
 */
$config['database'] = array(
	'default' => array(
		'dns' => "mysql:dbname=micromvc;host=127.0.0.1;port=3306",
		'username' => 'root',
		'password' => '',
		'params' => array()
	),
);

// Disabled modules
$config['disabled_modules'] = array(
	'unittest',
);

/**
 * URL Routing
 * 
 * Regex can also be used to define routes
 */
$config['routes'] = array(
	//'page/name' => 'error/404' // Or hide pages
);

/**
 * System Events
 */
$config['events'] = array(
	//'post_controller' => 'Class::method',
);

/**
 * Cookie Handling
 * 
 * To insure your cookies are secure, please choose a long, random key!
 * @link http://php.net/setcookie
 */
$config['cookie'] = array(
	'key' => 'key',
	'timeout' => time()+(60*60*4), // Ignore submitted cookies older than 4 hours
	'expires' => 0, // Expire on browser close
	'path' => '/',
	'domain' => '',
	'secure' => '',
	'httponly' => '',
);


/**
 * API Keys and Secrets
 * 
 * Insert you API keys and other secrets here.
 * Use for Akismet, ReCaptcha, Facebook, and more!
 */

//$config['-----_api_key'] = '...';

return $config;
