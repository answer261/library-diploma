<?php defined('SYSPATH') or die('No direct script access.');

// Base Equipment Manager Controller

class Controller_Admin_Baseequsman extends Controller_Admin_Commonentity {

	protected $car_id = 0;
	protected $modelName = "Baseequs";
	protected $indexViewFile = "admin/baseequs/index";
	protected $addFormViewFile = "admin/baseequs/addform";
	protected $editFormViewFile = "admin/baseequs/editform";
	protected $data = array();
	protected $redirectURL = "admin/baseequs";

	public function before() {
		parent::before();
		$this->car_id = $this->request->param("id");
		$this->redirectURL = $this->indexViewFile."/".$this->car_id;
	}

	public function action_index() {
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("admin/login");
		}
		else {
			$carsModel = Model::factory("Cars")->getRecord($this->car_id);
			$model_id = 0;
			$brand_id = 0;
			foreach ($carsModel as $car) {
				$model_id = $car->model_id;
			}
			$modelsModel = Model::factory("Models")->getRecord($model_id);
			foreach ($modelsModel as $models) {
				$brand_id = $models->brand_id;
			}
			$brandsModel = Model::factory("Brands")->getRecord($brand_id);
			$count = Model::factory($this->modelName)->countRecordsByCar($this->car_id);
			$content = View::factory($this->indexViewFile)->bind('page_links', $page_links);
			/* Paginator */
			$pagination = Pagination::factory(array('total_items' => $count, 'items_per_page' => 10));
			$model = Model::factory($this->modelName)->getBaseEqusRangeByCar($this->car_id, $pagination->items_per_page, $pagination->offset);
			/* Paginator */
			$page_links = $pagination->render();
			$content->data = $model;
			$content->brandsModel = $brandsModel;
			$content->modelsModel = $modelsModel;
			$content->car_id = $this->car_id;
			$this->template->content = $content;
		}
	}

	public function action_add() {
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("admin/login");
		}
		$pathToViewFile = $this->addFormViewFile;
		$content = View::factory($pathToViewFile);
		$content->car_id = $this->car_id;
		$this->template->content = $content;
	}

	protected function prepareMainData() {
		$this->data[] = intval($this->request->post('car_id'));
		$this->data[] = trim(strval($this->request->post('baseequ_name')));
		$this->data[] = trim(strval($this->request->post('baseequ_price')));
	}

	public function action_edit() {
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("admin/login");
		}
		else {
			$record_id = $this->request->param('id');
			$this->car_id = $this->request->param('car_id');
			$model = Model::factory($this->modelName)->getRecord($record_id);
			$pathToViewFile = $this->editFormViewFile;
			$content = View::factory($pathToViewFile);
			$content->data = $model;
			$content->car_id = $this->car_id;
			$this->template->content = $content;
		}
	}

	public function action_update() {
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("admin/login");
		}
		else {
			$this->data[] = intval($this->request->post('baseequ_id'));
			$this->prepareMainData();
			$model = Model::factory($this->modelName)->updateRecord($this->data);
			if ($model) $this->request->redirect($this->redirectURL);
		}
	}

} // Base Equipment Manager Controller