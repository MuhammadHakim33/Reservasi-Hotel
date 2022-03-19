<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {

	public function index()
	{
		$data["title"] = "Daftar Kamar";
		$this->load->view('user/view_header', $data);
		$this->load->view('user/view_list_kamar');
		$this->load->view('user/view_footer');
	}
}
