<?php defined('SYSPATH') or die('No direct script access.');

// Models Model

class Model_Models extends Model_Common {

	protected $tableName = "models";
	protected $fieldNames = array("model_id", "model_name", "brand_id");

	/**
	 * Return number of models of some brand
	 *
	 * @param int $brand_id
	 * @return int number of records
	 */
	public function countRecordsByBrand($brand_id) {
		$count = DB::query(Database::SELECT, 'SELECT COUNT(*) AS count FROM '
						   .$this->tableName.' WHERE '.$this->fieldNames[2].' = '.$brand_id)
						   ->execute()->get('count');
		return $count;
	}
	
	/**
	 * Return models of some brand
	 *
	 * @param int $brand_id
	 * @param int $limit
	 * @param int $offset
	 * @return MySQL Object
	 */
	public function getModelsRangeByBrand($brand_id, $limit, $offset) {
		$query = DB::select_array($this->fieldNames)->from($this->tableName)
								  ->where($this->fieldNames[2], "=", $brand_id)
								  ->order_by($this->fieldNames[0], 'asc')
								  ->limit($limit)->offset($offset);
		$result = $query->as_object()->execute();
		return $result;
	}

} // Models Model