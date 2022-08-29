<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Home_model');
	}
	
	public function index() {
		$data['title'] = 'Halaman Registrasi';
		$data['databuku'] = $this->Home_model->databuku();
		$data['datapinjaman'] = $this->Home_model->data_pinjaman();
		$data['t_pinjaman'] = $this->db->get_where('tb_pinjaman',['id_user_pinjaman' =>	$this->session->userdata('id')])->num_rows();
		$this->form_validation->set_rules('nama', 'nama', 'required|regex_match[/^([a-z ])+$/i]', [
				'required'	=>	'Kolom nama tidak boleh kosong',
				'regex_match'=>	'Harus berupa huruf']);
		$this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[tb_user.email_user]', [
					'required'	=>	'Kolom email tidak boleh kosong',
					'valid_email'=>	'Email tidak valid',
					'is_unique'=>	'Email sudah terdaftar']);
		$this->form_validation->set_rules('pass1', 'pass1', 'required|min_length[5]', [
					'required'	=>	'Kolom password tidak boleh kosong',
					'min_length'=>	'Password Minimal 5 karakter']);
		$this->form_validation->set_rules('password', 'password', 'required|matches[pass1]', [
					'required'	=>	'Kolom password tidak boleh kosong',
					'matches'	=>	'Konfirmasi password salah']);
		if($this->form_validation->run() == FALSE) {
			$this->load->view('home/header', $data);
			$this->load->view('user/registrasi', $data);
			$this->load->view('home/footer');
		}else {
			$this->_simpan();
			$this->session->set_flashdata('flash', 'Registrasi berhasil, silahkan Login !');
			redirect('user/login');
		}
	}

	private function _simpan() {
		$data = array (
			'nama_user'			=>   ucwords($this->input->post('nama')),
			'email_user'		=>   strtolower($this->input->post('email')),
			'password_user'		=>   password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'status_user'		=>   1,
			'foto_profil'		=>   'avatar5.png',
			'akun_dibuat'		=>   time()
		);
		
	    
            // Kirim Email
            if($this->db->insert('tb_user', $data)){
               $this->session->set_flashdata('message','Data Berhasil dibuat, Silahkan Login');
            }else{
               $this->session->set_flashdata('message', $this->email->print_debugger());
            }
    	}

}