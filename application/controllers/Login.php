<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Model_main');
		$this->load->library('session');
	}

    public function index()
	{
		// Cek Session
		if($this->session->userdata('status')){
			redirect(base_url('admin'));
			die;
		}

		// Form Validasi
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == FALSE) {
			$data["title"] = "Login";
			$this->load->view('staff/view_login', $data);

		} else {
			// Akun Validasi
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$where = [
				'username' => $username,
				'password' => $password
			];

			$data_login = $this->Model_main->getData("tbl_staff", $where);

			if(count($data_login) > 0){

				$data_session = [
					'status' => "login",
					'nama' => $data_login[0]["nama"],
					'level' => $data_login[0]["level"]
				];

				$this->session->set_userdata($data_session);

				($data_session["level"] == "administrator") ? redirect(base_url("admin")) : redirect(base_url("resepsionis"));
				
			} else { 
				$this->session->set_flashdata('pesanLogin', 'Username / Password Salah');
				redirect(base_url("login")); 
				die;
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url("login"));
		die;
	}
}
