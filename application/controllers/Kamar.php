<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {

	public function index()
	{
		$this->load->model('Model_main');

		$data["title"] = "Kamar";
		$data["kamar"] = $this->Model_main->get_data('tbl_kamar');		
		$data["fasilitas_kamar"] = $this->Model_main->get_data('tbl_fasilitas_kamar');		
		$this->load->view('user/view_header', $data);
		$this->load->view('user/view_kamar', $data);
		$this->load->view('user/view_footer');
	}
}
