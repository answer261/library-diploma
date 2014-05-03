<?php defined('SYSPATH') or die('No direct script access.');

// Orders Model

class Model_Orders extends Model_Common {

	protected $tableName = "orders";
	protected $fieldNames = array('order_id', 'baseequ_id', 'addequ_id', 'preorder', 'order_date', 'client_id');

	/**
	 * Select goodest orders information from database
	 *
	 * @param int $limit
	 * @param int $offset
	 */
	public function getCCOrdersRange($limit, $offset) {
		$query = DB::query(Database::SELECT, "SELECT orders.order_id, orders.order_date, 
						   CONCAT(clients.client_name, ' ', clients.client_surname) AS client_name,
						   CONCAT(brands.brand_name, ' ', models.model_name) AS car_name,
						   base_equipment.baseequ_name, base_equipment.baseequ_price
						   FROM orders, clients, base_equipment, cars, models, brands 
						   WHERE base_equipment.baseequ_id = orders.baseequ_id
						   AND cars.car_id = base_equipment.car_id
						   AND models.model_id = cars.model_id
						   AND brands.brand_id = models.brand_id
						   AND clients.client_id = orders.client_id 
						   ORDER BY orders.order_id LIMIT {$limit} OFFSET {$offset}");
		$result = $query->as_object()->execute();
		return $result;
	}
		
	public function getLastOrder() {
		$order_id = 0;
		$query = DB::select($this->fieldNames[0])->from($this->tableName)->order_by($this->fieldNames[0], "desc")->limit(1);
		$result = $query->as_object()->execute();
		foreach ($result as $order) {
			$order_id = $order->order_id;
		}
		return $order_id;
	}
	
} // Orders Model