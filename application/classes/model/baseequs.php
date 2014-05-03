<?php defined('SYSPATH') or die('No direct script access.');

// Baseequs Model

class Model_Baseequs extends Model_Common {
	
	protected $tableName = "base_equipment";
	protected $fieldNames = array("baseequ_id", "car_id", "baseequ_name", "baseequ_price");
	
	/**
	 * Return number of BaseEqus of some car
	 *
	 * @param int $car_id
	 * @return int number of records
	 */
	public function countRecordsByCar($car_id) {
		$count = DB::query(Database::SELECT, 'SELECT COUNT(*) AS count FROM '
						   .$this->tableName.' WHERE '.$this->fieldNames[1].' = '.$car_id)
						   ->execute()->get('count');
		return $count;
	}
	
	/**
	 * Return BaseEqus of some car
	 *
	 * @param int $car_id
	 * @param int $limit
	 * @param int $offset
	 * @return MySQL Object
	 */
	public function getBaseEqusRangeByCar($car_id, $limit, $offset) {
		$query = DB::select_array($this->fieldNames)->from($this->tableName)
								  ->where($this->fieldNames[1], "=", $car_id)
								  ->order_by($this->fieldNames[0], 'asc')
								  ->limit($limit)->offset($offset);
		$result = $query->as_object()->execute();
		return $result;
	}
	
}
// Baseequs Model