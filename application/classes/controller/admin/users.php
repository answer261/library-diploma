<?php defined('SYSPATH') or die('No direct script access.');

// Options Groups Manager Controller

class Controller_Admin_Users extends Controller_Admin_Commonentity {
	
	protected $modelName = "users";
	protected $indexViewFile = "admin/users/index";
	protected $addFormViewFile = "admin/users/addform";
	protected $editFormViewFile = "admin/users/editform";
	protected $data = array();
	protected $redirectURL = "admin/users";
		
	protected function prepareMainData() {
		
		
	}
	public function action_register() {
		$role = trim(strval($this->request->post('role')));
		$model = ORM::factory('user');
		$model->values(array(
   			'username' => trim(strval($this->request->post('username'))),
	   		'firstname' => trim(strval($this->request->post('firstname'))),
	   		'lastname' => trim(strval($this->request->post('lastname'))),
   			'email' => trim(strval($this->request->post('email'))),
   			'password' => trim(strval($this->request->post('password'))),
   			'password_confirm' => trim(strval($this->request->post('password_confirm'))),
		));
		$model->save();
	// remember to add the login role AND the admin role
	// add a role; add() executes the query immediately
		if($role == "admin") {
			$model->add('roles', ORM::factory('role')->where('name', '=', 'admin')->find());
			$model->add('roles', ORM::factory('role')->where('name', '=', 'login')->find());
		} else {
			$model->add('roles', ORM::factory('role')->where('name', '=', 'login')->find());
		}
		if ($model) $this->request->redirect($this->redirectURL);
	}
			
	public function action_update() {
		if (!Auth::instance()->logged_in("admin")) {
			$this->request->redirect("#");
		}
		else {
			$id = trim(strval($this->request->post('id')));
			$model = ORM::factory('user', $id);
			$model->values(array(
	   			'username' => trim(strval($this->request->post('username'))),
	   			'firstname' => trim(strval($this->request->post('firstname'))),
	   			'lastname' => trim(strval($this->request->post('lastname'))),
	   			'email' => trim(strval($this->request->post('email'))),
			));
			$model->save();
			if ($model) $this->request->redirect($this->redirectURL);
		}

	}
}

// Options Groups Manager Controller