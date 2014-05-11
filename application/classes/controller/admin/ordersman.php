<?php defined('SYSPATH') or die('No direct script access.');

// Orders Manager Controller

class Controller_Admin_Ordersman extends Controller_Admin_Commonentity {

	protected $modelName = "Orders";
	protected $indexViewFile = "admin/orders/index";
	protected $addFormViewFile = "admin/orders/addform";
	protected $editFormViewFile = "admin/orders/editform";
	protected $data = array();
	protected $redirectURL = "admin/orders";

	public function action_index() {
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("admin/login");
		}
		else {
			$count = Model::factory('Orders')->countRecords();
			$content = View::factory('admin/orders/index')->bind('page_links', $page_links);


			
			/* Paginator */
			$pagination = Pagination::factory(array('total_items' => $count, 'items_per_page' => 10));
			$model = Model::factory('Orders')->getRecordsRange($pagination->items_per_page, $pagination->offset);
			/* Paginator */
			$page_links = $pagination->render();
			$content->data = $model;
			$this->template->content = $content;
		}

	}
	
	protected function prepareMainData() {}
	
	public function action_update() {}
}