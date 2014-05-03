<?php defined('SYSPATH') or die('No direct access allowed.');

return array(

	'driver'       => 'ORM',
	'hash_method'  => 'sha256',
	'hash_key'     => 'Sraka',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		//'admin' => 'b3154acf3a344170077d11bdb5fff31532f679a1919e716a02',
		//'admin' => 'e5c1d440ae3e73b1a8a986a62ca89695',
	),

);
