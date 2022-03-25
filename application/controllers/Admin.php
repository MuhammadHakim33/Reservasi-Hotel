<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_main');
		$this->load->library('session');

		if(empty($this->session->userdata('status'))){
			redirect(base_url("login"));
			die;
		}

		if($this->session->userdata('level') != "administrator") {
			redirect(base_url("resepsionis"));
			die;
		}
	}

	public function index()
	{
		$data["title"] = "Dashboard";
		$data["nama"] = $this->session->userdata('nama');
        $this->load->view('staff/view_header', $data);
		$this->load->view('staff/view_dashboard_admin');
        $this->load->view('staff/view_set_modal');
        $this->load->view('staff/view_footer');
	}
    
}
