<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	public function index()
	{
		$data["title"] = "Fasilitas";
        $this->load->view('user/view_header', $data);
		$this->load->view('user/view_Fasilitas');
        $this->load->view('user/view_footer');
	}
}
