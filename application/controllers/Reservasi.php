<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_main');
        $this->load->library('session');
	}

    public function cek_kamar() 
    {
        $check_in = $this->input->post('check_in');
		$check_out = $this->input->post('check_out');
		$tipe_kamar = $this->input->post('tipe_kamar');
		$jumlah_kamar = $this->input->post('jumlah_kamar');
		$kamar_terisi = 0;
        
		$input_kamar = [
			'check_in' => $check_in,
			'check_out' => $check_out,
			'tipe_kamar' => $tipe_kamar,
			'jumlah_kamar' => $jumlah_kamar
		];

		// Get data tbl_reservasi_detail kolom 'jumlah_kamar'
		$data_reservasi = $this->Model_main->get_certain_column(
			'tbl_reservasi_detail',
			'jumlah_kamar', 
			['check_in' => $check_in, 'id_kamar' => $tipe_kamar]
		);

		// Get data tbl_kamar kolom 'jumlah_kamar'
		$data_kamar = $this->Model_main->get_certain_column(
			'tbl_kamar', 
			'jumlah_kamar',
			['id' => $tipe_kamar]
		)[0]['jumlah_kamar'];

		// Jumlahkan data variable $data_reservasi, 
		// lalu simpan di variable '$kamar_terisi'
		foreach($data_reservasi as $data) 
        {
			$kamar_terisi += $data['jumlah_kamar'];
		}

		// Cek kondisi
		if(($kamar_terisi + $jumlah_kamar) <= $data_kamar) 
        {
            $this->session->set_userdata('input_kamar', $input_kamar);
            redirect(base_url('beranda/') . 1);
		} 
        else 
        {
            redirect(base_url('beranda/') . 0);
		}
    }

	public function reservasi_kamar() 
	{
		$check_in = $this->input->post('check_in');
		$check_out = $this->input->post('check_out');
		$tipe_kamar = $this->input->post('tipe_kamar');
		$jumlah_kamar = $this->input->post('jumlah_kamar');
		$nama_pemesan = $this->input->post('nama_pemesan');
		$nama_tamu = $this->input->post('nama_tamu');
		$email_pemesan = $this->input->post('email_pemesan');
		$telp_pemesan = $this->input->post('telp_pemesan');
		$kode_reservasi = $this->nomor_reservasi($tipe_kamar);

		// Insert tbl_reservasi
		$input_1 = [
			'kode_reservasi' => $kode_reservasi,
			'nama_pemesan' => $nama_pemesan,
			'nama_tamu' => $nama_tamu,
			'email_pemesan' => $email_pemesan,
			'telp_pemesan' => $telp_pemesan,
		];
		$id_reservasi = $this->Model_main->insert_data('tbl_reservasi', $input_1, 'GET');

		// Insert tbl_reservasi_detail
		$input_2 = [
			'id_reservasi' => $id_reservasi,
			'id_kamar' => $tipe_kamar,
			'check_in' => $check_in,
			'check_out' => $check_out,
			'jumlah_kamar' => $jumlah_kamar,
		];
		$this->Model_main->insert_data('tbl_reservasi_detail', $input_2);

		$this->berhasil($kode_reservasi);
	}

	public function berhasil($kode_reservasi) 
	{
		$where = ['kode_reservasi' => $kode_reservasi];
		$data['reservasi'] = $this->Model_main->get_data('view_data_reservasi', $where);
		$data["title"] = "Berhasil";
		
		$this->load->view('user/view_header', $data);
		$this->load->view('user/view_pesan_berhasil', $data);
		$this->load->view('user/view_footer');
	}

	public function cetak($id_reservasi) 
	{
		$where = ['id' => $id_reservasi];
		$data['reservasi'] = $this->Model_main->get_data('view_data_reservasi', $where);

		$this->load->view('user/view_cetak', $data);
	}

	public function nomor_reservasi($id_kamar)
	{
		return  $id_kamar.date("Ymd").rand(100, 999);
	}
}