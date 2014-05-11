<?php defined('SYSPATH') or die('No direct script access.');

// Brands Manager Controller

class Controller_Admin_Invnumbers extends Controller_Admin_Commonentity {
	
	protected $modelName = "Invnumbers";
	protected $indexViewFile = "admin/invnumbers/index";
	protected $addFormViewFile = "admin/invnumbers/addform";
	protected $editFormViewFile = "admin/invnumbers/editform";
	protected $data = array();
	protected $redirectURL = "admin/invnumbers";
	protected function prepareMainData() {
		
		$this->data[] = intval($this->request->post('binv_number'));
		$this->data[] = intval($this->request->post('book_id'));

	}
			
	public function action_update() {
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("admin/login");
		}
		else {
			$this->prepareMainData();
			$model = Model::factory($this->modelName)->updateRecord($this->data);
			if ($model) $this->request->redirect($this->redirectURL);
		}
	}

	public function action_tuhes() {
		var_dump($_GET);
		exit(1);
	}



	public function addEditHandler($pathToViewFile, $record_id = null) {
		$model = Model::factory($this->modelName)->getRecordUpdt($record_id);
		$content = View::factory($pathToViewFile);
		$content->data = $model;
		
		$model_books = Model::factory('Books')->getRecords();
		$content->books = $model_books;

		$this->template->content = $content;
	}

	public function action_register() {
		

	
			// get variables from Request object
		
			$this->prepareMainData();
			$model = Model::factory($this->modelName)->registerRecord($this->data);
			if ($model) $this->request->redirect($this->redirectURL);
		
	}

}