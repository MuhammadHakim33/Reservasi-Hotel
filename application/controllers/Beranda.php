<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_main');
		$this->load->library('session');
	}

	public function index($result = null)
	{
		$data["title"] = "Beranda";
		$data["kamar"] = $this->Model_main->get_data('tbl_kamar');
		$data["reservasi"] = $result;
		$data["kamar_dipesan"] = $this->session->userdata('input_kamar');

		$this->load->view('user/view_header', $data);
		$this->load->view('user/view_beranda', $data);
		$this->load->view('user/view_footer');
	}

	public function delete()
	{
		$this->session->unset_userdata('input_kamar');
		redirect(base_url('beranda'));
	}

}
