<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('level') != 'siswa') {
            redirect('auth');
        }
        $this->load->model('HomeModel');
    }


	public function index()
	{
        $data['title'] = 'Voting Page';
        $data['kandidat'] = $this->db->get('kandidat')->result();
        $data['user'] = $this->db->get_where('user', ['id' =>$this->session->userdata('id')])->row();
        $this->load->view('home', $data);
	}

    public function visimisi($id_kandidat)
	{
        $data['title'] = 'Visi % Misi';
        $data['kandidat'] = $this->db->get_where('kandidat', ['id' => $id_kandidat])->row();
        $data['visimisi'] = $this->db->get_where('visimisi', ['id_kandidat' => $id_kandidat])->row();
        $this->load->view('home_visimisi', $data);
	}

    public function pilih_kandidat () {
        $data = [
            'id_user' => $this->input->post('id_user'),
            'no_calon' => $this->input->post('no_calon'),
        ];
        $this->db->insert('suara', $data);

        $data1 = ['status' => 1];
        $this->db->where('id', $this->input->post('id_user'));
        $this->db->update('user', $data1);

        if($this->db->affected_rows() > 0) {
            $result = ['success' => true];
        }else {
            $result = ['success' => false];
        }

        echo json_encode($result);
    }
}
