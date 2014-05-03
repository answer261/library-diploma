<?php defined('SYSPATH') or die('No direct script access.');

// Clients Model

class Model_Clients extends Model_Common {

	protected $tableName = "clients";
	protected $fieldNames = array("client_id", "client_surname", "client_name",
								  "client_fname", "client_address", "client_phone",
								  "client_email");

	public function getClientByEmail($client_email) {
		$client_id = -1;
		$query = DB::select($this->fieldNames[0])->from($this->tableName)->where($this->fieldNames[6], "=", $client_email)->limit(1);
		$result = $query->as_object()->execute();
		foreach ($result as $client) {
			$client_id = $client->client_id;
		}
		return $client_id;
	}

} // Clients Model