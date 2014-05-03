<?php defined('SYSPATH') or die('No direct script access.');

/**
 * @author Yurii Lytvynenko
 * Brands Model based on Common Model
 *
 */

class Model_Invnumbers extends Model_Common {
	
	protected $tableName = "books_inv_numbers";
	protected $fieldNames = array("binv_number", "book_id");

} // Brands Model