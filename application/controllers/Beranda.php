<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_main');
	}

	public function index()
	{
		$data["title"] = "Beranda";
		$data["kamar"] = $this->Model_main->get_data('tbl_kamar');
		$data["reservasi"] = null;

		$check_in = $this->input->post('check_in');
		$check_out = $this->input->post('check_out');
		$tipe_kamar = $this->input->post('tipe_kamar');
		$jumlah_kamar = $this->input->post('jumlah_kamar');

		if(!empty($check_in) && !empty($check_out)) {
			$result = $this->cek_ketersediaan_kamar($check_in, $tipe_kamar, $jumlah_kamar);
			$data["reservasi"] = ($result == true ) ? 'tersedia' : 'penuh';
		}

		$this->load->view('user/view_header', $data);
		$this->load->view('user/view_beranda', $data);
		$this->load->view('user/view_footer');
	}


	public function cek_ketersediaan_kamar($check_in, $tipe_kamar, $jumlah_kamar) {
		$table_one = 'tbl_pemesanan_kamar';
		$table_two = 'tbl_kamar';
		$where_one = ['check_in_kamar' => $check_in, 'id_kamar' => $tipe_kamar];
		$where_two = ['id' => $tipe_kamar];

		$tbl_pemesanan_kamar = $this->Model_main->get_data($table_one, $where_one);
		$tbl_kamar = $this->Model_main->get_data($table_two, $where_two);

		$kamar_terisi = 0;

		foreach($tbl_pemesanan_kamar as $kamar) {
			$kamar_terisi += $kamar['jumlah_kamar'];
		}

		if(($kamar_terisi + $jumlah_kamar) <= $tbl_kamar[0]['jumlah_kamar']) {
			return true;
		} else {
			return false;
		}
	}
}
