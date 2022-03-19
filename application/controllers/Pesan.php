<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	public function index()
	{
		$data["title"] = "Pesan Kamar";
		$this->load->view('user/view_header', $data);
		$this->load->view('user/view_pesan_kamar');
		$this->load->view('user/view_footer');
	}
}
