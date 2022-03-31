<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resepsionis extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_main');
		$this->load->library('session');

		if(empty($this->session->userdata('status'))){
			redirect(base_url("login"));
			die;
		}

		if($this->session->userdata('level') != "resepsionis") {
			redirect(base_url("admin"));
			die;
		}
	}

    public function index()
	{
		$data["title"] = "Dashboard";
		$data["nama"] = $this->session->userdata('nama');
		$data["reservasi"] = $this->Model_main->get_join_data('tbl_reservasi', 'tbl_kamar', 'id_kamar' , 'id');

		// Funsi Search
		if(!empty($this->input->post('nama_tamu')) || !empty($this->input->post('check_in'))) {
			$keyword = [
				'nama_tamu' => $this->input->post('nama_tamu'), 
				'check_in_kamar' => $this->input->post('check_in')
			];

			$data['reservasi'] = $this->Model_main->search_data('tbl_reservasi', 'tbl_kamar', 'id_kamar' , 'id', $keyword);
		}

        $this->load->view('staff/view_header', $data);
		$this->load->view('staff/view_dashboard_resepsionis', $data);
        $this->load->view('staff/view_footer');
	}
}
