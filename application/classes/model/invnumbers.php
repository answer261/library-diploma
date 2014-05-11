<?php defined('SYSPATH') or die('No direct script access.');

/**
 * @author Yurii Lytvynenko
 * Brands Model based on Common Model
 *
 */

class Model_Invnumbers extends Model_Common {
	
	protected $tableName = "books_inv_numbers";
	protected $fieldNames = array("binv_number", "book_id");

	public function getRecord($record_id) {
		$query = DB::select_array($this->fieldNames)->from($this->tableName)->where($this->fieldNames[1], "=", $record_id);
		$result = $query->as_object()->execute();
		return $result;
	}

	public function getRecordUpdt($record_id) {
		$query = DB::select_array($this->fieldNames)->from($this->tableName)->where($this->fieldNames[0], "=", $record_id);
		$result = $query->as_object()->execute();
		return $result;
	}



} // Brands Model