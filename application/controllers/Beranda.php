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

		$data_input = [
			'check_in' => $check_in,
			'check_out' => $check_out,
			'tipe_kamar' => $tipe_kamar,
			'jumlah_kamar' => $jumlah_kamar
		];

		if(!empty($check_in) && !empty($check_out)) {
			$result = $this->cek_ketersediaan_kamar($check_in, $tipe_kamar, $jumlah_kamar);
			$data["reservasi"] = ($result == true ) ? 'tersedia' : 'penuh';
			$data["data_kamar_dipesan"] = $data_input;
		}

		$this->load->view('user/view_header', $data);
		$this->load->view('user/view_beranda', $data);
		$this->load->view('user/view_footer');
	}


	public function cek_ketersediaan_kamar($check_in, $tipe_kamar, $jumlah_kamar) {
		$table_one = 'tbl_reservasi';
		$table_two = 'tbl_kamar';
		$where_one = ['check_in_kamar' => $check_in, 'id_kamar' => $tipe_kamar];
		$where_two = ['id' => $tipe_kamar];

		$tbl_reservasi = $this->Model_main->get_data($table_one, $where_one);
		$tbl_kamar = $this->Model_main->get_data($table_two, $where_two);

		$kamar_terisi = 0;

		foreach($tbl_reservasi as $kamar) {
			$kamar_terisi += $kamar['jumlah_kamar'];
		}

		if(($kamar_terisi + $jumlah_kamar) <= $tbl_kamar[0]['jumlah_kamar']) {
			return true;
		} else {
			return false;
		}
	}


	public function reservasi_kamar() {
		$check_in = $this->input->post('check_in');
		$check_out = $this->input->post('check_out');
		$tipe_kamar = $this->input->post('tipe_kamar');
		$jumlah_kamar = $this->input->post('jumlah_kamar');
		$nama_pemesan = $this->input->post('nama_pemesan');
		$nama_tamu = $this->input->post('nama_tamu');
		$email_pemesan = $this->input->post('email_pemesan');
		$telp_pemesan = $this->input->post('telp_pemesan');
		
		$table = 'tbl_reservasi';
		$input = [
			'id_kamar' => $tipe_kamar,
			'check_in_kamar' => $check_in,
			'check_out_kamar' => $check_out,
			'jumlah_kamar' => $jumlah_kamar,
			'nama_pemesan' => $nama_pemesan,
			'nama_tamu' => $nama_tamu,
			'email_pemesan' => $email_pemesan,
			'telp_pemesan' => $telp_pemesan
		];

		$this->Model_main->insert_data($table, $input);
		$this->berhasil($table, $input);
	}

	public function berhasil($table, $input) {
		$where = [
			'check_in_kamar' => $input['check_in_kamar'],
			'check_out_kamar' => $input['check_out_kamar'],
			'nama_pemesan' => $input['nama_pemesan'],
			'email_pemesan' => $input['email_pemesan']
		];

		$data['reservasi_tamu'] = $this->Model_main->get_data($table, $where);
		$data["title"] = "Berhasil";
		
		$this->load->view('user/view_pesan_berhasil', $data);
	}
}
