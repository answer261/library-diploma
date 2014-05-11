<?php defined('SYSPATH') or die('No direct script access.');

// Orders Controller
/**
 * @author Mykola Gulvanyuk
 *
 */

class Controller_Orders extends Controller_Common {

	public function action_index() {}

	public function action_new() {
		$user_id = Auth::instance()->get_user()->id;
		$firstname = Auth::instance()->get_user()->firstname;
		$lastname = Auth::instance()->get_user()->lastname;

		
		$content = View::factory("orders/addform");
		$content->data = $model_baseequs;
		$this->template->content = $content;
	}

	public function action_register() {
		$data = array();
		// check client info by email
		// if client present we need to know client_id
		$client_email = $this->request->post("client_email");
		$client_id = Model::factory('Clients')->getClientByEmail($client_email);
		if ($client_id == -1) {
			// check client fields
			$data[] = 0;
			$data[] = trim(strval($this->request->post('client_surname')));
			$data[] = trim(strval($this->request->post('client_name')));
			$data[] = trim(strval($this->request->post('client_fname')));
			$data[] = trim(strval($this->request->post('client_address')));
			$data[] = trim(strval($this->request->post('client_phone')));
			$data[] = trim(strval($this->request->post('client_email')));
			// store information about new client into database
			$model_client = Model::factory('Clients')->registerRecord($data);
			// get client_id of new client
			$client_id = Model::factory('Clients')->getClientByEmail($client_email);
		}

		unset($data);
		$data[] = 0;
		$data[] = intval($this->request->post('baseequ_id'));
		$data[] = 0;
		$data[] = 1;
		$data[] = DB::expr('CURDATE()');
		$data[] = $client_id;
		$result = Model::factory('Orders')->registerRecord($data);
		if ($result) {
			$order_id = Model::factory('Orders')->getLastOrder();
			$this->request->redirect('orders/registered/'.$order_id);
		}
	}

	public function action_registered() {
		$order_id = $this->request->param('id');
		$content = View::factory("orders/registered");
		$content->order_id = $order_id;
		$this->template->content = $content;
	}

}