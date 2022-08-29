<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Home_model');
		if($this->session->userdata('status_login') != 'sudah_login') {
			redirect('user/login');
		}
	}

	public function index() {
		$data['title'] = 'Halaman Member';
		$data['totalbuku'] = $this->db->get('tb_buku')->num_rows();
		$data['m_aktif'] = $this->db->get_where('tb_user',['status_user' => 1])->num_rows();
		$data['datapinjaman'] = $this->Home_model->data_pinjaman();
		$this->load->view('user/tema/header', $data);
		$this->load->view('user/dashboard', $data);
		$this->load->view('user/tema/footer');
	}

	public function kembalikan() {
		$id_book = $this->uri->segment(4);
		if($id_book == '') {
			redirect('user/dashboard');
		}
		$ceksisa = $this->db->get_where('tb_buku',['id_buku' => $id_book])->row_array();
		$sisa = $ceksisa['jumlah_buku']+1;

		$this->db->set('jumlah_buku', $sisa);
		$this->db->where('id_buku', $id_book);
		$this->db->update('tb_buku');
		$this->db->delete('tb_pinjaman', ['id_user_pinjaman' => $this->session->userdata('id'), 'id_buku_pinjaman' => $id_book]);
		$data = array (
			'id_buku_pengembalian'		=>   $id_book,
			'id_user_pengembalian'		=>   $this->session->userdata('id')
		);
	
		$this->db->insert('tb_pengembalian', $data);
		$this->session->set_flashdata('flash', 'Buku berhasil dikembalikan');
		redirect('user/dashboard');
	}

}