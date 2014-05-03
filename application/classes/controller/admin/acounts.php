<?php defined('SYSPATH') or die('No direct script access.');

// Options Groups Manager Controller

class Controller_Admin_Acounts extends Controller_Admin_Commonentity {
	
	protected $modelName = "acounts";
	protected $indexViewFile = "admin/acounts/index";
	protected $addFormViewFile = "admin/acounts/addform";
	protected $editFormViewFile = "admin/acounts/editform";
	protected $data = array();
	protected $redirectURL = "admin/acounts";
		
	protected function prepareMainData() {
		$this->data[] = intval($this->request->post('user_id'));
		$this->data[] = intval($this->request->post('binv_number'));
		$this->data[] = trim(strval($this->request->post('start_date')));
		$this->data[] = trim(strval($this->request->post('end_date')));
	}
			
	public function action_update() {
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("admin/login");
		}
		else {
			$this->data[] = intval($this->request->post('accrec_id'));
			$this->prepareMainData();
			$model = Model::factory($this->modelName)->updateRecord($this->data);
			if ($model) $this->request->redirect($this->redirectURL);
		}
	}
}

// Options Groups Manager Controller