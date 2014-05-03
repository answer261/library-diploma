<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Error_Handler extends Controller_Template {

	public $template = 'error';

	public function before()
	{
		parent::before();

		$this->template->page = URL::site(rawurldecode(Request::$initial->uri()));

		// internal request
		if (Request::$initial !== Request::$current)
		{
			if ($message = rawurldecode($this->request->param('message')))
			{
				$this->template->message = $message;
			}
		}
		else
		{
			$this->request->action(404);
		}

		// устанавливаем HTTP статус
		$this->response->status((int) $this->request->action());
	}

	public function action_404()
	{
		$this->template->title = 'Page not found';
		$this->template->content = '404';
		$this->template->content2 = 'Wrong Way';

		// check is internal link
		if (isset ($_SERVER['HTTP_REFERER']) AND strstr($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) !== FALSE)
		{
			// assign flag
			$this->template->local = TRUE;
		}

		// assign HTTP status
		$this->response->status(404);
	}

	public function action_503()
	{
		$this->template->title = 'Service is unavaliable';
	}

	public function action_500()
	{
		$this->template->title = 'Internal Server Error';
	}

} // End Error_Handler