<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		$data["title"] = "Beranda";
		$this->load->view('user/view_header', $data);
		$this->load->view('user/view_beranda');
		$this->load->view('user/view_footer');
	}
}
