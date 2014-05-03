<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Admin_Commonentity extends Controller_Template {

	protected $modelName = "";
	protected $indexViewFile = "";
	protected $addFormViewFile = "";
	protected $editFormViewFile = "";
	protected $data = array();
	protected $redirectURL = "";
	public $template = 'admin/main';

	public function before() {
		parent::before();
		View::set_global('title', 'Авто-Салон');
		View::set_global('description', 'Kohana 3.2 framework based site');
		$this->template->content = "";
		$this->template->styles = array('framework','main');
		$this->template->scripts = "";
		if (!Auth::instance()->logged_in("admin")) {
			$this->request->redirect("login");
		}
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

	/**
	 * Handler for add/edit actions
	 *
	 * @param String $pathToViewFile - path to file where placed needed HTML-form
	 * @param int $record_id - primary key value
	 */
	public function addEditHandler($pathToViewFile, $record_id = null) {
		$model = Model::factory($this->modelName)->getRecord($record_id);
		$content = View::factory($pathToViewFile);
		$content->data = $model;
		$this->template->content = $content;
	}

	public function action_edit() {

	
			$record_id = $this->request->param('id');
			$this->addEditHandler($this->editFormViewFile, $record_id);
	
	}

	public function action_add() {
	
	
			$this->addEditHandler($this->addFormViewFile);
		
	}
	
	abstract protected function prepareMainData();
	
	public function action_register() {
		

	
			// get variables from Request object
			$this->data[] = 0; // record_id - default for increment
			$this->prepareMainData();
			$model = Model::factory($this->modelName)->registerRecord($this->data);
			if ($model) $this->request->redirect($this->redirectURL);
		
	}
	
	abstract public function action_update();

} // End of Admin Common