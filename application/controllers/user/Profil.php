<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function index() {
		$data['title'] = 'Profil Saya';
		$this->form_validation->set_rules('nama', 'nama', 'required|regex_match[/^([a-z ])+$/i]|min_length[3]', [
					'required'	=>	'Kolom nama tidak boleh kosong',
					'regex_match'=>	'Kolom nama harus berupa huruf',
					'min_length'=>	'Terlalu pendek, minimal 3 karakter']);
		$this->form_validation->set_rules('plama', 'plama', 'required', [
					'required'	=>	'Kolom konfirmasi password tidak boleh kosong']);
		if($this->form_validation->run() == FALSE) {
			$this->load->view('user/tema/header', $data);
			$this->load->view('user/profil', $data);
			$this->load->view('user/tema/footer');
		}else {
			$this->_cek_pass();
		}
	}

	private function _cek_pass() {
		$passlama	=	$this->input->post('plama');

		if(password_verify($passlama, $this->session->userdata('sandi'))) {
			$this->ubah_profil();
			$this->session->set_flashdata('flash', 'Profil berhasil diupdate, silahkan logout dan login kembali untuk melihat perubahan');
			redirect('user/profil');
		}else {
			$this->session->set_flashdata('error','Konfirmasi password salah');
			redirect('user/profil');
		}
	}

	private function ubah_profil() {
	    $nama = ucwords($this->input->post('nama'));
	
	    // get foto
	    $config['upload_path'] = './assets/dist/img/';
	    $config['allowed_types'] = 'jpg|png|jpeg|gif';
	    $config['encrypt_name'] = TRUE;
	
	    $this->upload->initialize($config);
	    if (!empty($_FILES['gambar']['name'])) {
	        if ( $this->upload->do_upload('gambar') ) {
	            $gambar = $this->upload->data();
	            $config['image_library'] = 'gd2';
	            $config['source_image'] = './assets/dist/img/'.$gambar['file_name'];
	            $config['create_thumb'] = FALSE;
	            $config['maintain_ratio'] = FALSE;
	            $config['quality'] = '60%';
	            $config['new_image'] = './assets/dist/img/'.$gambar['file_name'];
	                
	            $data = array(
	                    'nama_user'			=>	$nama,
						'foto_profil'		=>	$gambar['file_name']
	                );
	           }
	    }else {
	    	$data = array(
	            'nama_user'		=>	$nama,
				'foto_profil'		=>	$this->input->post('gambar_old')
	        );
	    }
	
		$this->db->where('id_user', $this->session->userdata('id'));
		$this->db->update('tb_user', $data);
	}
}