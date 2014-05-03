<?php defined('SYSPATH') or die('No direct script access.');

// Options Model

class Model_Options extends Model_Common {
	
	protected $tableName = "options";
	protected $fieldNames = array("option_id", "option_name", "optg_id");
	
	/**
	 * Return number of options of some options group
	 *
	 * @param int $optg_id - option group identifier
	 * @return int number of records
	 */
	public function countRecordsByOptionGroup($optg_id) {
		$count = DB::query(Database::SELECT, 'SELECT COUNT(*) AS count FROM '
						   .$this->tableName.' WHERE '.$this->fieldNames[2].' = '.$optg_id)
						   ->execute()->get('count');
		return $count;
	}
	
	/**
	 * Return options of some options group
	 *
	 * @param int $optg_id - option group identifier
	 * @param int $limit
	 * @param int $offset
	 * @return MySQL Object
	 */
	public function getOptionsRangeByOptionGroup($optg_id, $limit, $offset) {
		$query = DB::select_array($this->fieldNames)->from($this->tableName)
								  ->where($this->fieldNames[2], "=", $optg_id)
								  ->order_by($this->fieldNames[0], 'asc')
								  ->limit($limit)->offset($offset);
		$result = $query->as_object()->execute();
		return $result;
	}
	
} // Options Model