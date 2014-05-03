<?php defined('SYSPATH') or die('No direct script access.');

// Cars Manager Controller

class Controller_Admin_Carsman extends Controller_Admin_Commonentity {
	
	protected $modelName = "Cars";
	protected $indexViewFile = "admin/cars/index";
	protected $addFormViewFile = "admin/cars/addform";
	protected $editFormViewFile = "admin/cars/editform";
	protected $data = array();
	protected $redirectURL = "admin/cars";
		
	protected function prepareMainData() {
		$this->data[] = intval(($this->request->post('model_id')));
		$this->data[] = intval(($this->request->post('number_of_places')));
		$this->data[] = intval(($this->request->post('max_speed')));
		$this->data[] = doubleval(($this->request->post('engine_volume')));
		$this->data[] = intval(($this->request->post('gear_id')));
		$this->data[] = intval(($this->request->post('carcasstype_id')));
		$this->data[] = doubleval(($this->request->post('width')));
		$this->data[] = doubleval(($this->request->post('height')));
		$this->data[] = doubleval(($this->request->post('length')));
		$this->data[] = intval(($this->request->post('fueltype_id')));
		$this->data[] = doubleval(($this->request->post('fuel_consumption')));
		$this->data[] = doubleval(($this->request->post('weight')));
		$this->data[] = strval(($this->request->post('engine_number')));
		$this->data[] = strval(($this->request->post('carcass_number')));
	}
	
	public function addEditHandler($pathToViewFile, $record_id = null) {
		$model_fueltypes = Model::factory('Fueltypes')->getRecords();
		$model_carcasstypes = Model::factory('Carcasstypes')->getRecords();
		$model_gears = Model::factory('Gears')->getRecords();
		
		$model_brands = Model::factory('Brands')->getRecords();
		$model_models = Model::factory('Models')->getRecords();
		
		$models = array(array());

		// Array with brands and models of these brands
		// $models[brand_name_key]=>model_object_value
		foreach ($model_brands as $brand) {
			foreach ($model_models as $model) {
				if ($model->brand_id == $brand->brand_id) {
					$models[$brand->brand_name][$model->model_id] = $model;
				}
			}
		}
		
		$model = Model::factory($this->modelName)->getRecord($record_id);
		$content = View::factory($pathToViewFile);
		$content->data = $model;
		$content->fueltypes = $model_fueltypes;
		$content->carcasstypes = $model_carcasstypes;
		$content->gears = $model_gears;
		$content->models = $models;
		$this->template->content = $content;		
	}
			
	public function action_update() {
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("admin/login");
		}
		else {
			$this->data[] = intval($this->request->post('car_id'));
			$this->prepareMainData();
			$model = Model::factory($this->modelName)->updateRecord($this->data);
			if ($model) $this->request->redirect($this->redirectURL);
		}
	}

} // Cars Manager Controller