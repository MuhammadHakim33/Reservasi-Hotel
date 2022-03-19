<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	// public function index()
	// {
	// 	$data["title"] = "Dashboard";
    //     $this->load->view('staff/view_header', $data);
    //     $this->load->view('staff/view_navside');
	// 	$this->load->view('staff/view_dashboard_admin');
    //     $this->load->view('staff/view_footer');
	// }
    
    public function index()
	{
		$data["title"] = "Dashboard";
        $this->load->view('staff/view_header', $data);
		$this->load->view('staff/view_dashboard_resepsionis');
        $this->load->view('staff/view_footer');
	}
}
