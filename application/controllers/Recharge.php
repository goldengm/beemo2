<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recharge extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'Recharge';
		$this->page_data['page']->menu = 'recharge';
	}
	public function index()
	{
		//
	}
	public function agent()
	{
		$this->page_data['page']->submenu = 'recharge_agent';
		$this->load->view('recharge/agent', $this->page_data);
	}
	public function commission()
	{
		$this->page_data['page']->submenu = 'recharge_commission';
		$this->load->view('recharge/commission', $this->page_data);
	}
	public function history()
	{
		$this->page_data['page']->submenu = 'recharge_history';
		$this->load->view('recharge/history', $this->page_data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */