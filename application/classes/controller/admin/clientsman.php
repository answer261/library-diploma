<?php defined('SYSPATH') or die('No direct script access.');

// Clients Manager Controller

class Controller_Admin_Clientsman extends Controller_Admin_Commonentity {
	
	protected $modelName = "Clients";
	protected $indexViewFile = "admin/clients/index";
	protected $addFormViewFile = "admin/clients/addform";
	protected $editFormViewFile = "admin/clients/editform";
	protected $data = array();
	protected $redirectURL = "admin/clients";
		
	protected function prepareMainData() {
		$this->data[] = trim(strval($this->request->post('client_surname')));
		$this->data[] = trim(strval($this->request->post('client_name')));
		$this->data[] = trim(strval($this->request->post('client_fname')));
		$this->data[] = trim(strval($this->request->post('client_address')));
		$this->data[] = trim(strval($this->request->post('client_phone')));
		$this->data[] = trim(strval($this->request->post('client_email')));
	}
	
	public function action_update() {
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("admin/login");
		}
		else {
			$this->data[] = intval($this->request->post('client_id'));
			$this->prepareMainData();
			$model = Model::factory($this->modelName)->updateRecord($this->data);
			if ($model) $this->request->redirect($this->redirectURL);
		}
	}

} // Clients Manager Controller