<?php defined('SYSPATH') or die('No direct script access.');

// Categories Model

class Model_Users extends Model_Common {
	
	protected $tableName = "users";
	protected $fieldNames = array("id", "email", "username", "password", "logins", "last_login");
	
}
