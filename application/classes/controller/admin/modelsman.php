<?php defined('SYSPATH') or die('No direct script access.');

// Models Manager Controller

class Controller_Admin_Modelsman extends Controller_Admin_Commonentity {

	protected $brand_id = 0;
	protected $modelName = "Models";
	protected $indexViewFile = "admin/models/index";
	protected $addFormViewFile = "admin/models/addform";
	protected $editFormViewFile = "admin/models/editform";
	protected $data = array();
	protected $redirectURL = "admin/models";

	public function before() {
		parent::before();
		$this->brand_id = $this->request->param("id");
		$this->redirectURL = $this->indexViewFile."/".$this->brand_id;
	}

	public function action_index() {
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("admin/login");
		}
		else {
			$brandModel = Model::factory("Brands")->getRecord($this->brand_id);
			$count = Model::factory($this->modelName)->countRecordsByBrand($this->brand_id);
			$content = View::factory($this->indexViewFile)->bind('page_links', $page_links);
			/* Paginator */
			$pagination = Pagination::factory(array('total_items' => $count, 'items_per_page' => 10));
			$model = Model::factory($this->modelName)->getModelsRangeByBrand($this->brand_id, $pagination->items_per_page, $pagination->offset);
			/* Paginator */
			$page_links = $pagination->render();
			$content->data = $model;
			$content->brandModel = $brandModel;
			$content->brand_id = $this->brand_id;
			$this->template->content = $content;
		}
	}

	public function action_add() {
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("admin/login");
		}
		$pathToViewFile = $this->addFormViewFile;
		$content = View::factory($pathToViewFile);
		$content->brand_id = $this->brand_id;
		$this->template->content = $content;
	}

	protected function prepareMainData() {
		$this->data[] = trim(strval($this->request->post('model_name')));
		$this->data[] = intval($this->request->post('brand_id'));
	}

	public function action_edit() {
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("admin/login");
		}
		else {
			$record_id = $this->request->param('id');
			$this->brand_id = $this->request->param('brand_id');
			$model = Model::factory($this->modelName)->getRecord($record_id);
			$pathToViewFile = $this->editFormViewFile;
			$content = View::factory($pathToViewFile);
			$content->data = $model;
			$content->brand_id = $this->brand_id;
			$this->template->content = $content;
		}
	}

	public function action_update() {
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("admin/login");
		}
		else {
			$this->data[] = intval($this->request->post('model_id'));
			$this->prepareMainData();
			$model = Model::factory($this->modelName)->updateRecord($this->data);
			if ($model) $this->request->redirect($this->redirectURL);
		}
	}

} // Models Manager Controller