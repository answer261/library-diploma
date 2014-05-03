<?php defined('SYSPATH') or die('No direct script access.');

// Brands Manager Controller

class Controller_Admin_Booksman extends Controller_Admin_Commonentity {
	
	protected $modelName = "Books";
	protected $indexViewFile = "admin/books/index";
	protected $addFormViewFile = "admin/books/addform";
	protected $editFormViewFile = "admin/books/editform";
	protected $data = array();
	protected $redirectURL = "admin/books";
	protected function prepareMainData() {
		
		$this->data[] = intval($this->request->post('category_id'));
		$this->data[] = trim(strval($this->request->post('book_title')));
		$this->data[] = trim(strval($this->request->post('authors')));
		$this->data[] = intval($this->request->post('isbn_code'));
		$this->data[] = intval($this->request->post('pages'));
		$this->data[] = intval($this->request->post('publisher_id'));
		$this->data[] = trim(strval($this->request->post('pub_date')));
		$this->data[] = trim(strval($this->request->post('language_code')));
		$this->data[] = intval($this->request->post('udk_codes'));
		$this->data[] = intval($this->request->post('bbk_codes'));
		$this->data[] = intval($this->request->post('author_code'));

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
			

			$model_categories = Model::factory('Categories')->getRecords();
			$content->categories = $model_categories;
		
			$this->template->content = $content;
	}

	public function addEditHandler($pathToViewFile, $record_id = null) {

		
		$models = array(array());
		$model = Model::factory($this->modelName)->getRecord($record_id);
		$content = View::factory($pathToViewFile);
		$content->data = $model;
		
			$model_categories = Model::factory('Categories')->getRecords();
			$content->categories = $model_categories;
		
			$this->template->content = $content;		
	}
			
	public function action_update() {
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("admin/login");
		}
		else {
			$this->data[] = intval($this->request->post('book_id'));
			$this->prepareMainData();
			$model = Model::factory($this->modelName)->updateRecord($this->data);
			if ($model) $this->request->redirect($this->redirectURL);
		}
	}

	public function action_tuhes() {
		var_dump($_GET);
		exit(1);
	}

} // Brands Manager Controller