<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resepsionis extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_main');
		$this->load->library('session');

		if(empty($this->session->userdata('status')))
		{
			redirect(base_url("login"));
			die;
		}

		if($this->session->userdata('level') != "resepsionis") 
		{
			redirect(base_url("admin"));
			die;
		}
	}

    public function index()
	{
		$data["title"] = "Dashboard";
		$data["nama"] = $this->session->userdata('nama');
		$data["reservasi"] = $this->Model_main->get_data('view_data_reservasi');
		
		// // Funsi Search
		if(!empty($this->input->post('nama_tamu')) || !empty($this->input->post('check_in'))) 
		{
			$keyword = [
				'nama_tamu' => $this->input->post('nama_tamu'), 
				'check_in' => $this->input->post('check_in')
			];

			$data['reservasi'] = $this->Model_main->search_data('view_data_reservasi', $keyword);
		}

        $this->load->view('staff/view_header', $data);
		$this->load->view('staff/view_dashboard_resepsionis', $data);
        $this->load->view('staff/view_footer');
	}

	public function edit_status() {
		$id =  $this->input->post('id', true);

		$table = 'tbl_reservasi';
		$where = ['id' => $id];
		$input = ['status' => "terkonfirmasi"];

		$this->Model_main->update_data($table, $input, $where);
		redirect(base_url('resepsionis'));
		die;
	}
}
