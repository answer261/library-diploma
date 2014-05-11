<?php defined('SYSPATH') or die('No direct script access.');

// Options Groups Manager Controller

class Controller_Admin_Acounts extends Controller_Admin_Commonentity {
	
	protected $modelName = "Acounts";
	protected $indexViewFile = "admin/acounts/index";
	protected $addFormViewFile = "admin/acounts/addform";
	protected $editFormViewFile = "admin/acounts/editform";
	protected $data = array();
	protected $redirectURL = "admin/acounts";

		public function before() {
		parent::before();

	}
		
	protected function prepareMainData() {
		$this->data[] = intval($this->request->post('user_id'));
		$this->data[] = intval($this->request->post('binv_number'));
		$this->data[] = trim(strval($this->request->post('start_date')));
		$this->data[] = trim(strval($this->request->post('end_date')));
	}

	public function action_index() {

			$count = Model::factory($this->modelName)->countRecords();
			$content = View::factory($this->indexViewFile)->bind('page_links', $page_links);
			/* Paginator */
			$pagination = Pagination::factory(array('total_items' => $count, 'items_per_page' => 10));
			$model = Model::factory($this->modelName)->getRecordsRange($pagination->items_per_page, $pagination->offset);
			/* Paginator */
			$page_links = $pagination->render();
			$content->data = $model;
			$this->template->content = $content;
		
	}

	public function addEditHandler($pathToViewFile, $record_id = null) {

		
		$models = array(array());
		$model = Model::factory($this->modelName)->getRecord($record_id);
		$content = View::factory($pathToViewFile);
		$content->data = $model;
		
			$model_users = Model::factory('Users')->getRecords();
			$content->users = $model_users;

			$model_invnumbers = Model::factory('Invnumbers')->getRecordsUpdt();
			$content->invnumbers = $model_invnumbers;
		
			$this->template->content = $content;		
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