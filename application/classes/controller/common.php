<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Common extends Controller_Template {
	
	protected $modelName = "";
	protected $indexViewFile = "";
	public $template = 'main';
		
	public function before() {
		parent::before();
		View::set_global('title', 'Електронна бібліотека');
		View::set_global('description', 'Kohana 3.2 framework based site');
		$this->template->content = "";
		$this->template->styles = array('framework', 'main');
		$this->template->scripts = "";
	}
	
	public function action_index() {
		$count = Model::factory($this->modelName)->countRecords();
		$content = View::factory($this->indexViewFile)->bind('page_links', $page_links);
		/* Paginator */
		$pagination = Pagination::factory(array('total_items' => $count, 'items_per_page' => 5));			
		$model = Model::factory($this->modelName)->getRecordsRange($pagination->items_per_page, $pagination->offset);
		/* Paginator */
		$page_links = $pagination->render();
		$content->data = $model;
		$this->template->content = $content;
	}
	
} // End of Common