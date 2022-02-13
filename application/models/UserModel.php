<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function getUser() {
		$this->db->select('*, user.id as id_user, user.nama as nama_user, kelas.nama as nama_kelas');
		$this->db->from('user');
		$this->db->join('kelas', 'kelas.id = user.id_kelas', 'left');
		return $this->db->get();
	}

	public function simpan() {
		// $this->form_validation->set_rules('email','Email', 'trim|required|is_unique[user.email]', [
		// ]);
	
		// if ($this->form_validation->run() == FALSE) {
		// 	$this->index();
		// 	echo "<script> alert('Email sudah ada, gagal meregristasi akun') </script>";
		// } else {

			$data = [
				'id_kelas' => $this->input->post('id_kelas'),
				'nama' => $this->input->post('nama', true),
				'email' => $this->input->post('email', true),
				'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
				'level' => $this->input->post('level', true)
			];
			$this->db->insert('user', $data);
			
		// }
	}

	public function update() {
		$data = [
			'id_kelas' => $this->input->post('id_kelas'),
			'nama' => $this->input->post('nama', true),
			'email' => $this->input->post('email', true),
			'level' => $this->input->post('level', true)
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user', $data);
	}
}
