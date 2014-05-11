<?php defined('SYSPATH') or die('No direct script access.');

// Options Groups Manager Controller

class Controller_User_Orders extends Controller_User_Commonentity {
	
	protected $modelName = "Orders";
	protected $indexViewFile = "user/orders/new";
	protected $data = array();
	protected $redirectURL = "user/orders/registered";

		public function before() {
		parent::before();

	}
		
	protected function prepareMainData() {
		$user = ORM::factory('invnumbers');

		$book_id = intval($this->request->post('book_id'));
		$model = Model::factory("Invnumbers");

		$inv_numbers = $model->getRecord($book_id);
		//$inv_number = $inv_number_row->binv_number;
		$binv_number = 0;

		foreach ($inv_numbers as $inv_number) {
			$binv_number = $inv_number->binv_number;
			$book_id = $inv_number->book_id;

		}

		$this->data[] = intval($this->request->post('user_id'));
		$this->data[] = $binv_number;
		$this->data[] = trim(strval($this->request->post('start_date')));
		$this->data[] = trim(strval($this->request->post('end_date')));
	}

	public function action_new() {

		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("login");
		}

		$user_id = Auth::instance()->get_user()->id;
		$firstname = Auth::instance()->get_user()->firstname;
		$lastname = Auth::instance()->get_user()->lastname;
		$email = Auth::instance()->get_user()->email;
		$model_books = Model::factory('books')->getRecords();

		$content = View::factory("user/orders/addform");

		$content->user_id = $user_id;
		$content->firstname = $firstname;
		$content->lastname = $lastname;
		$content->email = $email;
		$content->data = $model_books;
		$this->template->content = $content;
		
		
	}

	public function addEditHandler($pathToViewFile, $record_id = null) {

		
	}

	public function action_update() {
		if (!Auth::instance()->logged_in("login")) {
			$this->request->redirect("login");
		}
		else {
			$this->data[] = intval($this->request->post('accrec_id'));
			$this->prepareMainData();
			$model = Model::factory($this->modelName)->updateRecord($this->data);

			if ($model) $this->request->redirect('orders/registered');
		}
	}

	public function action_registered() {
		$order_id = $this->request->param('id');
		$content = View::factory("user/orders/registered");
		$this->template->content = $content;
	}
	
		# code...
}

// Options Groups Manager Controller