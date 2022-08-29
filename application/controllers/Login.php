<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$data['title'] = 'Login Admin';
		$this->form_validation->set_rules('email', 'email', 'required', [
					'required'	=>	'Kolom email tidak boleh kosong']);
		$this->form_validation->set_rules('password', 'password', 'required', [
					'required'	=>	'Kolom password tidak boleh kosong']);
		if($this->form_validation->run() == FALSE) {
			$this->load->view('admin/login', $data);
		}else {
			$this->_periksa();
		}
	}

	private function _periksa() {
		$email = $this->input->post('email');
		$pass = $this->input->post('password');

		$cek = $this->db->get_where('tb_admin',['email_admin' =>	$email])->row_array();
		if($cek) {
			if(password_verify($pass, $cek['password_admin'])) {
					$data_adm = array (
						'id_ad'					=>	$cek['id_admin'],
						'nama_ad'					=>	$cek['nama_admin'],
						'email_ad'					=>	$cek['email_admin'],
						'sandi_ad'					=>	$cek['password_admin'],
						'username_ad'			=>	$cek['username_admin'],
						'login_status'			=>	'login'
					);
					$this->session->set_userdata($data_adm);
					$mssg = 'Selamat datang '. $this->session->userdata('nama_ad');
					$this->session->set_flashdata('flash', $mssg);
					redirect('admin');
				}else {
					$this->session->set_flashdata('error', 'Password anda salah !');
					redirect('login');
				}
		}else {
			$this->session->set_flashdata('error', 'Email tidak terdaftar !');
			redirect('login');
		}
	}

	

	public function logout() {
		$this->session->sess_destroy();
		redirect('login');
	}
}