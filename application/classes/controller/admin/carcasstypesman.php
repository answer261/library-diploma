<?php defined('SYSPATH') or die('No direct script access.');

// Carcasstypes Manager Controller

class Controller_Admin_Carcasstypesman extends Controller_Admin_Commonentity {
	
	protected $modelName = "Carcasstypes";
	protected $indexViewFile = "admin/carcasstypes/index";
	protected $addFormViewFile = "admin/carcasstypes/addform";
	protected $editFormViewFile = "admin/carcasstypes/editform";
	protected $data = array();
	protected $redirectURL = "admin/carcasstypes";
		
	protected function prepareMainData() {
		$this->data[] = trim(strval($this->request->post('carcasstype_name')));
		$this->data[] = trim(strval($this->request->post('carcasstype_desc')));
	}
			
	public function action_update() {
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("admin/login");
		}
		else {
			$this->data[] = intval($this->request->post('carcasstype_id'));
			$this->prepareMainData();
			$model = Model::factory($this->modelName)->updateRecord($this->data);
			if ($model) $this->request->redirect($this->redirectURL);
		}
	}

} // Carcasstypes Manager Controller