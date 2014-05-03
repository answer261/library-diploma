<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/kohana/core'.EXT;

if (is_file(APPPATH.'classes/kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/timezones
 */
date_default_timezone_set('Europe/Kiev');

/**
 * Set the default locale.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @see  http://kohanaframework.org/guide/using.autoloading
 * @see  http://php.net/spl_autoload_register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @see  http://php.net/spl_autoload_call
 * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('en-us');

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}
else
{
	Kohana::$environment = Kohana::PRODUCTION;
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 */
Kohana::init(array(
	'base_url'   => 'poohdini.ho.ua/',
	'index_file' => FALSE,
    'profile'    => Kohana::$environment !== Kohana::PRODUCTION,
    'caching'    => Kohana::$environment === Kohana::PRODUCTION,
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
	'auth'       => MODPATH.'auth',       // Basic authentication
	// 'cache'      => MODPATH.'cache',      // Caching with multiple backends
	// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	'database'   => MODPATH.'database',     // Database access
	// 'image'      => MODPATH.'image',      // Image manipulation
	 'orm'        => MODPATH.'orm',        // Object Relationship Mapping
	// 'unittest'   => MODPATH.'unittest',   // Unit testing
	// 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
	'pagination' => MODPATH.'pagination', // pagination
	));

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

Route::set('admin', 'admin')
	->defaults(array(
		'directory'  => 'admin',
		'controller' => 'main',
		'action'	 => 'index',
	));	

Route::set('user', 'user')
	->defaults(array(
		'directory'  => 'user',
		'controller' => 'main',
		'action'	 => 'index',
	));	

Route::set('login', 'login')
	->defaults(array(
		'controller' => 'login',
		'action'	 => 'index',
	));

Route::set('login2', 'login/login')
	->defaults(array(
		'controller' => 'login',
		'action'	 => 'login',
	));

	
Route::set('logout', 'logout')
	->defaults(array(
		'controller' => 'login',
		'action'	 => 'logout',
	));

/**
 * [Admin] Clients Manager Controller Routers
 */
Route::set('clientsman', 'admin/clients(/<action>(/<id>))', array('action' => 'index|add|edit|register|update'))
	->defaults(array(
		'directory'  => 'admin',
		'controller' => 'clientsman',
	));
/**
 * [Admin] Clients Manager Controller Routers
 */

/**
 * [Admin] Brands Manager Controller Routers
 */
Route::set('brandsman', 'admin/brands(/<action>(/<id>))', array('action' => 'index|add|edit|register|update|tuhes'))
	->defaults(array(
		'directory'  => 'admin',
		'controller' => 'brandsman',
	));
/**
 * [Admin] Brands Manager Controller Routers
 */	
Route::set('booksman', 'admin/books(/<action>(/<id>))', array('action' => 'index|add|edit|register|update|tuhes'))
	->defaults(array(
		'directory'  => 'admin',
		'controller' => 'booksman',
	));

Route::set('acounts', 'admin/acounts(/<action>(/<id>))', array('action' => 'index|add|edit|register|update|tuhes'))
	->defaults(array(
		'directory'  => 'admin',
		'controller' => 'acounts',
	));
/**
 * [Admin] Fueltypes Manager Controller Routers
 */
Route::set('invnumbers', 'admin/invnumbers(/<action>(/<id>))', array('action' => 'index|add|edit|register|update'))
	->defaults(array(
		'directory'  => 'admin',
		'controller' => 'invnumbers',
	));

Route::set('categories', 'admin/categories(/<action>(/<id>))', array('action' => 'index|add|edit|register|update'))
	->defaults(array(
		'directory'  => 'admin',
		'controller' => 'categories',
	));


Route::set('users', 'admin/users(/<action>(/<id>))', array('action' => 'index|add|edit|register|update'))
	->defaults(array(
		'directory'  => 'admin',
		'controller' => 'users',
	));

Route::set('fueltypesman', 'admin/fueltypes(/<action>(/<id>))', array('action' => 'index|add|edit|register|update'))
	->defaults(array(
		'directory'  => 'admin',
		'controller' => 'fueltypesman',
	));
/**
 * [Admin] Fueltypes Manager Controller Routers
 */	

/**
 * [Admin] Carcasstypes Manager Controller Routers
 */
Route::set('carcasstypesman', 'admin/carcasstypes(/<action>(/<id>))', array('action' => 'index|add|edit|register|update'))
	->defaults(array(
		'directory'  => 'admin',
		'controller' => 'carcasstypesman',
	));
/**
 * [Admin] Carcasstypes Manager Controller Routers
 */	

/**
 * [Admin] Models Manager Controller Routers
 */
Route::set('modelsman', 'admin/models(/<action>(/<id>))', array('action' => 'index|add|register|update'))
	->defaults(array(
		'directory'  => 'admin',
		'controller' => 'modelsman',
	));
	
Route::set('editmodel', 'admin/models(/<action>(/<id>)(/<brand_id>))', array('action' => 'edit'))
	->defaults(array(
		'directory'  => 'admin',
		'controller' => 'modelsman',
	));
/**
 * [Admin] Models Manager Controller Routers
 */	

/**
 * [Admin] Cars Manager Controller Routers
 */
Route::set('carsman', 'admin/cars(/<action>(/<id>))', array('action' => 'index|add|edit|register|update'))
	->defaults(array(
		'directory'  => 'admin',
		'controller' => 'carsman',
	));
/**
 * [Admin] Cars Manager Controller Routers
 */	

/**
 * [Admin] Options Groups Manager Controller Routers
 */
Route::set('optgsman', 'admin/optg(/<action>(/<id>))', array('action' => 'index|add|edit|register|update'))
	->defaults(array(
		'directory'  => 'admin',
		'controller' => 'optionsgroupsman',
	));
/**
 * [Admin] Options Groups Manager Controller Routers
 */	

/**
 * [Admin] Orders Manager Controller Routers
 */
Route::set('ordersman', 'admin/orders(/<action>(/<id>))', array('action' => 'index|add|edit|register|update'))
	->defaults(array(
		'directory'  => 'admin',
		'controller' => 'ordersman',
	));
/**
 * [Admin] Options Groups Manager Controller Routers
 */	

/**
 * [Admin] Options Manager Controller Routers
 */
Route::set('optionsman', 'admin/options(/<action>(/<id>))', array('action' => 'index|add|register|update'))
	->defaults(array(
		'directory'  => 'admin',
		'controller' => 'optionsman',
	));
	
Route::set('editoption', 'admin/options(/<action>(/<id>)(/<optg_id>))', array('action' => 'edit'))
	->defaults(array(
		'directory'  => 'admin',
		'controller' => 'optionsman',
	));
/**
 * [Admin] Options Manager Controller Routers
 */	

/**
 * [Admin] Base Equipment Manager Controller Routers
 */
Route::set('baseequsman', 'admin/baseequs(/<action>(/<id>))', array('action' => 'index|add|register|update'))
	->defaults(array(
		'directory'  => 'admin',
		'controller' => 'baseequsman',
	));
	
Route::set('editbaseequ', 'admin/baseequs(/<action>(/<id>)(/<car_id>))', array('action' => 'edit'))
	->defaults(array(
		'directory'  => 'admin',
		'controller' => 'baseequsman',
	));
/**
 * [Admin] Base Equipment Manager Controller Routers
 */	

Route::set('page', '<action>', array('action' => 'about|projects|info|contact'))
	->defaults(array(
		'controller' => 'page',
	));

Route::set('clientorders', 'user/orders(/<action>(/<id>))', array('action' => 'new|registerered'))
	->defaults(array(
		'directory'  => 'user',
		'controller' => 'orders',
	));

	
Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'page',
		'action'     => 'about',
	));
