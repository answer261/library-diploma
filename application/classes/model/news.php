<?php defined('SYSPATH') or die('No direct script access.');

// News Model

class Model_News extends Model {
		
	/* For pagination */
	/**
	 * Return count of table records [news]
	 *
	 * @return int
	 */
	public function countNews() {
		$count = DB::query(Database::SELECT, 'SELECT COUNT(*) AS count FROM news')->execute()->get('count');
		return $count;		
	}
	
	/**
	 * Select news information from database
	 *
	 * @param int $limit
	 * @param int $offset
	 * @return mysql_object
	 */
	public function getNewsRange($limit, $offset) {
		$query = DB::select('title', 'authors', DB::expr("DATE_FORMAT(pub_date, '%d-%m-%Y') as pub_date"), 'pub_time', 'info', 'id')->from('news')->order_by('id', 'desc')->limit($limit)->offset($offset);
		$result = $query->as_object()->execute();
		return $result;
	}
	/* For pagination */
	
	/**
	 * Select news message from database
	 *
	 * @param int $news_id
	 * @return query result
	 */
	public function getNewsMessage($news_id) {
		$query = DB::query(Database::SELECT, 'SELECT title, authors, info, id FROM news WHERE id =:news_id')->param(':news_id', $news_id);
		$result = $query->as_object()->execute();
		return $result;
	}
	
	/**
	 * Store new message data into database
	 *
	 * @param mixed array $values
	 * @return boolean
	 */
	public function registerNews($values) {
		$tableName = "news";
		$fieldNames = array('title', 'authors', 'pub_date', 'pub_time', 'info', 'id');
		$insertQuery = DB::insert($tableName, $fieldNames)->values($values);
		list($insert_id, $aff_rows) = $insertQuery->execute();
		if ($aff_rows > 0) return true;
		if ($aff_rows <= 0) return false;		
	}
	
	public function updateNews($values) {
		$tableName = "news";
		$fieldNames = array('id', 'title', 'authors', 'info');
		$updateQuery = DB::update($tableName)
						->value($fieldNames[1], $values[1])
						->value($fieldNames[2], $values[2])
						->value($fieldNames[3], $values[3])
						->where($fieldNames[0], '=', $values[0]);
		$rows = $updateQuery->execute();
		if ($rows > 0) return true;
		if ($rows == 0) return false;
	}
	
} // News Model