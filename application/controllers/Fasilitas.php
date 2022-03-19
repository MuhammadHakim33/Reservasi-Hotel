<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	public function index()
	{
		$data["title"] = "Fasilitas";
        $this->load->view('staff/view_header', $data);
        $this->load->view('staff/view_navside');
		$this->load->view('staff/view_Fasilitas');
        $this->load->view('staff/view_footer');
	}
}
