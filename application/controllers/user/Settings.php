<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Home_model');
		if($this->session->userdata('status_login') != 'sudah_login') {
			redirect('user/login');
		}
	}

	public function password() {
		$data['title'] = 'Ganti Password';
		$this->form_validation->set_rules('pbaru', 'pbaru', 'required', [
					'required'	=>	'Kolom Password Baru tidak boleh kosong']);
		$this->form_validation->set_rules('plama', 'plama', 'required', [
					'required'	=>	'Kolom konfirmasi password lama tidak boleh kosong']);
		if($this->form_validation->run() == FALSE) {
			$this->load->view('user/tema/header', $data);
			$this->load->view('user/ganti_pass', $data);
			$this->load->view('user/tema/footer');
		}else {
			$this->_periksapass();
		}
	}

	private function _periksapass() {
		$passlama	=	$this->input->post('plama');
		$passbaru	=	password_hash($this->input->post('pbaru'), PASSWORD_DEFAULT);
		if(password_verify($passlama, $this->session->userdata('sandi'))) {
			$this->db->set('password_user', $passbaru);
			$this->db->where('id_user', $this->session->userdata('id'));
			$this->db->update('tb_user');
			$this->session->set_flashdata('flash', 'Password berhasil diupdate, silahkan logout dan login kembali untuk melihat perubahan');
			redirect('user/settings/password');
		}else {
			$this->session->set_flashdata('error','Konfirmasi Password Lama Salah');
			redirect('user/settings/password');
		}
	}

	

}