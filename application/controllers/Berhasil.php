<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berhasil extends CI_Controller {

	public function index() 
	{
		$data["title"] = "Pesan Kamar Berhasil";
		$this->load->view('user/view_header', $data);
		$this->load->view('user/view_pesan_berhasil');
		$this->load->view('user/view_footer');
	}

	public function cetak() {
		$data["title"] = "Cetak";
		$this->load->view('user/view_header', $data);
		$this->load->view('user/view_cetak_reservasi');
		$this->load->view('user/view_footer');
	}	
}
