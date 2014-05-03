<?php defined('SYSPATH') or die('No direct script access.');

// Options Manager Controller

class Controller_Admin_Optionsman extends Controller_Admin_Commonentity {

	protected $optg_id = 0;
	protected $modelName = "Options";
	protected $indexViewFile = "admin/options/index";
	protected $addFormViewFile = "admin/options/addform";
	protected $editFormViewFile = "admin/options/editform";
	protected $data = array();
	protected $redirectURL = "admin/options";

	public function before() {
		parent::before();
		$this->optg_id = $this->request->param("id");
		$this->redirectURL = $this->indexViewFile."/".$this->optg_id;
	}

	public function action_index() {
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("admin/login");
		}
		else {
			$optgModel = Model::factory("Optionsgroups")->getRecord($this->optg_id);
			$count = Model::factory($this->modelName)->countRecordsByOptionGroup($this->optg_id);
			$content = View::factory($this->indexViewFile)->bind('page_links', $page_links);
			/* Paginator */
			$pagination = Pagination::factory(array('total_items' => $count, 'items_per_page' => 10));
			$model = Model::factory($this->modelName)->getOptionsRangeByOptionGroup($this->optg_id, $pagination->items_per_page, $pagination->offset);
			/* Paginator */
			$page_links = $pagination->render();
			$content->data = $model;
			$content->optgModel = $optgModel;
			$content->optg_id = $this->optg_id;
			$this->template->content = $content;
		}
	}

	public function action_add() {
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("admin/login");
		}
		$pathToViewFile = $this->addFormViewFile;
		$content = View::factory($pathToViewFile);
		$content->optg_id = $this->optg_id;
		$this->template->content = $content;
	}

	protected function prepareMainData() {
		$this->data[] = trim(strval($this->request->post('option_name')));
		$this->data[] = intval($this->request->post('optg_id'));
	}

	public function action_edit() {
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("admin/login");
		}
		else {
			$record_id = $this->request->param('id');
			$this->optg_id = $this->request->param('optg_id');
			$model = Model::factory($this->modelName)->getRecord($record_id);
			$pathToViewFile = $this->editFormViewFile;
			$content = View::factory($pathToViewFile);
			$content->data = $model;
			$content->optg_id = $this->optg_id;
			$this->template->content = $content;
		}
	}

	public function action_update() {
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("admin/login");
		}
		else {
			$this->data[] = intval($this->request->post('option_id'));
			$this->prepareMainData();
			$model = Model::factory($this->modelName)->updateRecord($this->data);
			if ($model) $this->request->redirect($this->redirectURL);
		}
	}

} // Options Manager Controller