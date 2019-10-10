<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delivery extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'Delivery';
		$this->page_data['page']->menu = 'delivery';
	}
	public function index()
	{
		//
	}
	public function agent()
	{
		$this->page_data['page']->submenu = 'delivery_agent';
		$this->load->view('delivery/agent', $this->page_data);
	}
	public function package()
	{
		$this->page_data['page']->submenu = 'delivery_package';
		$this->load->view('delivery/package', $this->page_data);
	}
	public function settings()
	{
		$this->page_data['page']->submenu = 'delivery_settings';
		$this->load->view('delivery/settings', $this->page_data);
	}
	public function history()
	{
		$this->page_data['page']->submenu = 'delivery_history';
		$this->load->view('delivery/history', $this->page_data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */