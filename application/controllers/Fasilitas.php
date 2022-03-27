<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	public function index()
	{
		$this->load->model('Model_main');

		$data["title"] = "Fasilitas";
		$data["fasilitas_hotel"] = $this->Model_main->get_data('tbl_fasilitas_hotel');	
        $this->load->view('user/view_header', $data);
		$this->load->view('user/view_Fasilitas');
        $this->load->view('user/view_footer');
	}
}
