<?php defined('SYSPATH') or die('No direct script access.');

// Categories Model

class Model_Categories extends Model_Common {
	
	protected $tableName = "categories";
	protected $fieldNames = array("category_id", "category_name");
	
}
