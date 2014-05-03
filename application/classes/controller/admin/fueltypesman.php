<?php defined('SYSPATH') or die('No direct script access.');

// Fueltypes Manager Controller

class Controller_Admin_Fueltypesman extends Controller_Admin_Commonentity {
	
	protected $modelName = "Fueltypes";
	protected $indexViewFile = "admin/fueltypes/index";
	protected $addFormViewFile = "admin/fueltypes/addform";
	protected $editFormViewFile = "admin/fueltypes/editform";
	protected $data = array();
	protected $redirectURL = "admin/fueltypes";
		
	protected function prepareMainData() {
		$this->data[] = trim(strval($this->request->post('fueltype_name')));
	}
			
	public function action_update() {
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("admin/login");
		}
		else {
			$this->data[] = intval($this->request->post('fueltype_id'));
			$this->prepareMainData();
			$model = Model::factory($this->modelName)->updateRecord($this->data);
			if ($model) $this->request->redirect($this->redirectURL);
		}
	}

} // Fueltypes Manager Controller