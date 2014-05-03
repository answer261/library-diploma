<?php defined('SYSPATH') or die('No direct script access.');

// Cars Model

class Model_Cars extends Model_Common {

	protected $tableName = "cars";
	protected $fieldNames = array("car_id", "model_id", "number_of_places", 
								  "max_speed", "engine_volume", "gear_id", 
								  "carcasstype_id", "width", "height", "length",
								  "fueltype_id", "fuel_consumption", "weight",
								  "engine_number", "carcass_number");
								  
} // Gears Model