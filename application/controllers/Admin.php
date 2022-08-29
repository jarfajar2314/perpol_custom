<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model');
		if($this->session->userdata('login_status') != 'login') {
			redirect('login');
		}
	}

	public function index() {
		$data['title'] = 'Halaman Admin';
		$data['totalbuku'] = $this->db->get('tb_buku')->num_rows();
		$data['totaluser'] = $this->db->get('tb_user')->num_rows();
		$data['totalpeminjam'] = $this->Admin_model->total_peminjam();
		$data['datapeminjam'] = $this->Admin_model->data_peminjam();
		$data['datauser'] = $this->Admin_model->data_user();
		$this->load->view('tema/header', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('tema/footer');
	}

	// book start here

	public function buku() {
		$data['title'] = 'Data Buku Perpustakaan';
		$data['databuku'] = $this->Admin_model->data_buku();
		$this->load->view('tema/header', $data);
		$this->load->view('admin/buku', $data);
		$this->load->view('tema/footer');
	}

	public function add_buku() {
		
		$data['title'] = 'Tambah Data Buku';
		$this->form_validation->set_rules('judul', 'judul', 'required', [
					'required'	=>	'Kolom judul buku tidak boleh kosong',
					]);
		if($this->form_validation->run() == FALSE) {
			$this->load->view('tema/header', $data);
			$this->load->view('admin/add_buku', $data);
			$this->load->view('tema/footer');
		}else {
			 $config = array();
			 $nama = str_replace(' ', '', $_FILES['buku']['name']);
			 $nama_bu = rand().$nama;
			 $nama_buku = str_replace("'",'',$nama_bu);
			 $path = "./assets/buku/pdf/";
			 $config['upload_path'] = $path;
			 $config['allowed_types'] = 'pdf';
			 $config['max_size']    = '15000000000000';
			 $config['file_name']    = $nama_buku;
			//  $nama_buku = rand().$_FILES['buku']['name'];
			$this->load->library('upload');
			
			$this->upload->initialize($config);
			
			if(!is_dir($path)){
				@mkdir($path, 0777, true);
			}
			
			if ( ! $this->upload->do_upload('buku')) {
				throw new Exception($this->upload->display_errors());
			} else {
				$this->upload->data();
				$this->Admin_model->simpan_buku($nama_buku);
				$this->session->set_flashdata('flash', 'Data buku berhasil ditambahkan');
				redirect('admin/buku');
				// return $this->upload->data();
			}
			
		}
	}

	public function edit_buku($id) {
		$data['title'] = 'Edit Data Buku';
		$data['bukuid'] = $this->Admin_model->bukubyid($id);
		$this->form_validation->set_rules('judul', 'judul', 'required', [
			'required'	=>	'Kolom judul buku tidak boleh kosong',
			]);
		
		if($this->form_validation->run() == FALSE) {
			$this->load->view('tema/header', $data);
			$this->load->view('admin/edit_buku', $data);
			$this->load->view('tema/footer');
		}else {
		// 	var_dump($this->input->post());
		// var_dump($_FILES);
		// die;
			if(!empty($_FILES['buku']['name'])) {
				$config = array();
				$nama = str_replace(' ', '', $_FILES['buku']['name']);
				$nama_bu = rand().$nama;
				$nama_buku = str_replace("'",'',$nama_bu);
				$path = "./assets/buku/pdf/";
				$config['upload_path'] = $path;
				$config['allowed_types'] = 'pdf';
				$config['max_size']    = '15000000000000';
				$config['file_name']    = $nama_buku;
				//  $nama_buku = rand().$_FILES['buku']['name'];
				$this->load->library('upload');
				
				$this->upload->initialize($config);
				
				
				if ( ! $this->upload->do_upload('buku')) {
					throw new Exception($this->upload->display_errors());
				} else {
					$this->Admin_model->ubah_buku($nama_buku);
					$this->session->set_flashdata('flash', 'Data buku berhasil diedit');
					redirect('admin/buku');

				}
			}else {
				$buku_old = $this->input->post('buku_old');
				$this->Admin_model->ubah_buku($buku_old);
				$this->session->set_flashdata('flash', 'Data buku berhasil diedit');
				redirect('admin/buku');
				
			}
			
		}
	}

	public function hapus_buku($id) {
		$this->Admin_model->del_buku($id);
		$this->session->set_flashdata('flash', 'Data buku berhasil dihapus');
		redirect('admin/buku');
	}

	// data user start here

	public function data_member() {
		$data['title'] = 'Data Member';
		$data['datamember'] = $this->Admin_model->data_user_all();
		$this->load->view('tema/header', $data);
		$this->load->view('admin/data_member', $data);
		$this->load->view('tema/footer');
	}

	public function edit_member($id) {
		$data['title'] = 'Edit Data Member';
		$data['usid'] = $this->db->get_where('tb_user',['id_user' => $id])->row_array();
		$this->form_validation->set_rules('nama', 'nama', 'required', [
					'required'	=>	'Kolom ini tidak boleh kosong']);
		$this->form_validation->set_rules('email', 'email', 'required', [
					'required'	=>	'Kolom ini tidak boleh kosong']);
		$this->form_validation->set_rules('password', 'password', 'required', [
					'required'	=>	'Kolom ini tidak boleh kosong']);
		$this->form_validation->set_rules('status', 'status', 'required', [
					'required'	=>	'Kolom ini tidak boleh kosong']);
		if($this->form_validation->run() == FALSE) {
			$this->load->view('tema/header', $data);
			$this->load->view('admin/edit_member', $data);
			$this->load->view('tema/footer');
		}else {
			$this->Admin_model->ubah_member($id);
			$this->session->set_flashdata('flash', 'Data buku berhasil diedit');
			redirect('admin/data_member');
		}
	}

	public function hapus_member($id) {
		$this->db->where('id_user', $id);
		$this->db->delete('tb_user');
		$this->session->set_flashdata('flash', 'Data member berhasil dihapus');
		redirect('admin/data_member');
	}

	// data peminjam

	public function data_peminjam() {
		$data['title'] = 'Data Peminjaman Buku';
		$data['datapinjam'] = $this->Admin_model->data_pinjam_all();
		$this->load->view('tema/header', $data);
		$this->load->view('admin/data_peminjaman', $data);
		$this->load->view('tema/footer');
	}

	public function kembalikan() {
		$id_book = $this->uri->segment(3);
		if($id_book == '') {
			redirect('admin/data_peminjam');
		}
		$ceksisa = $this->db->get_where('tb_buku',['id_buku' => $id_book])->row_array();
		$sisa = $ceksisa['jumlah_buku']+1;

		$this->db->set('jumlah_buku', $sisa);
		$this->db->where('id_buku', $id_book);
		$this->db->update('tb_buku');
		$this->db->delete('tb_pinjaman', ['id_user_pinjaman' => $this->uri->segment(5), 'id_buku_pinjaman' => $id_book]);
		$data = array (
			'id_buku_pengembalian'		=>   $id_book,
			'id_user_pengembalian'		=>   $this->uri->segment(5)
		);
	
		$this->db->insert('tb_pengembalian', $data);
		$this->session->set_flashdata('flash', 'Buku berhasil dikembalikan');
		redirect('admin/data_peminjam');
	}

	public function data_pengembalian() {
		$data['title'] = 'Data Pengembalian Buku';
		$data['datakembali'] = $this->Admin_model->data_pengembalian_buku();
		$this->load->view('tema/header', $data);
		$this->load->view('admin/data_pengembalian', $data);
		$this->load->view('tema/footer');
	}

	public function buku_sumbangan() {
		$data['title'] = 'Data Buku Sumbangan';
		$data['buku'] = $this->Admin_model->data_buku_sumbangan();
		$this->load->view('tema/header', $data);
		$this->load->view('admin/data_sumbangan_buku', $data);
		$this->load->view('tema/footer');
	}

	public function konfirmasi_buku($id) {
		$this->db->set('subu_status', 'Dikonfirmasi');
		$this->db->where('subu_id', $id);
		$this->db->update('tb_sumbang_buku');
		redirect('admin/buku_sumbangan');
	}

	public function terima_buku($id) {
		$this->db->set('subu_status', 'Diterima');
		$this->db->where('subu_id', $id);
		$this->db->update('tb_sumbang_buku');
		redirect('admin/buku_sumbangan');
	}
}