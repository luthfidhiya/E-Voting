<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VisiMisiModel extends CI_Model {

	public function getVisimisi() {
		$this->db->select('*');
		$this->db->from('visimisi');
		$this->db->join('kandidat', 'kandidat.id = visimisi.id_kandidat');
		return $this->db->get();
	}


	public function update() {
		$data = [
			'visi' => $this->input->post('visi', true),
			'misi' => $this->input->post('misi', true),
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('visimisi', $data);
	}
}
