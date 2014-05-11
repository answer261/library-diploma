<?php defined('SYSPATH') or die('No direct script access.');

// Orders Model

class Model_Orders extends Model_Common {

	protected $tableName = "book_orders";
	protected $fieldNames = array('order_id', "user_id", "binv_number", "start_date", "end_date");


	
} // Orders Model