<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Model_Common - abstract class in which placed most useful methods
 * @author Mykola Gulvanyuk
 * @version 0.1
 *
 */

abstract class Model_Common extends Model {
	
	protected $tableName = "";
	protected $fieldNames = array();
	
	/* For pagination */
	/**
	 * Return count of table records
	 *
	 * @return int
	 */
	public function countRecords() {
		$count = DB::query(Database::SELECT, 'SELECT COUNT(*) AS count FROM '.$this->tableName)->execute()->get('count');
		return $count;
	}

	/**
	 * Select records from database [for pagination]
	 *
	 * @param int $limit
	 * @param int $offset
	 * @return mysql_object
	 */
	public function getRecordsRange($limit, $offset) {
		$query = DB::select_array($this->fieldNames)->from($this->tableName)->order_by($this->fieldNames[0], 'asc')->limit($limit)->offset($offset);
		$result = $query->as_object()->execute();
		return $result;
	}
	/* For pagination */
	
	public function getRecords() {
		$query = DB::select_array($this->fieldNames)->from($this->tableName)->order_by($this->fieldNames[0], 'asc');
		$result = $query->as_object()->execute();
		return $result;
	}	

	/**
	 * Select one record from database
	 *
	 * @param int $country_id
	 * @return query result
	 */
	public function getRecord($record_id) {
		$query = DB::select_array($this->fieldNames)->from($this->tableName)->where($this->fieldNames[0], "=", $record_id);
		$result = $query->as_object()->execute();
		return $result;
	}
		
	/**
	 * Store information about new record into database
	 *
	 * @param mixed array $values
	 * @return boolean
	 */
	public function registerRecord($values) {
		$insertQuery = DB::insert($this->tableName, $this->fieldNames)->values($values);
		list($insert_id, $aff_rows) = $insertQuery->execute();
		if ($aff_rows > 0) return true;
		if ($aff_rows <= 0) return false;
	}

	public function updateRecord($values) {
		$pairs = array();

		for ($i = 1;$i < sizeof($this->fieldNames);$i++) {
			$pairs[$this->fieldNames[$i]] = $values[$i];
		}
			
		$updateQuery = DB::update($this->tableName)
		->set($pairs)->where($this->fieldNames[0], '=', $values[0]);
		$rows = $updateQuery->execute();
		if ($rows > 0) return true;
		if ($rows == 0) return true;
	}

} // Common Model