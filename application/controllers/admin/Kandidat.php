<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kandidat extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('KandidatModel');
        if ($this->session->userdata('level') != 'admin') {
            redirect('auth');
        }
    }

	public function index() {
        $data['title'] = 'Kandidat';
        $data['rows'] = $this->db->get('kandidat')->result();
        $this->load->view('templates/admin_header',$data);
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
		$this->load->view('admin/kandidat',$data);
        $this->load->view('templates/admin_footer');
	}

    public function edit($id) {
        $data['title'] = 'Edit Kandidat';
        $data['row'] = $this->db->get_where('kandidat', ['id' => $id])->row();
        $this->load->view('templates/admin_header',$data);
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
		$this->load->view('admin/kandidat_edit',$data);
        $this->load->view('templates/admin_footer');
	}

    public function update() {
        $this->KandidatModel->update();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message2',
            '<div class="alert alert-warning alert-dismissible" style = "width:95%;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-warning"></i> Berhasil Diupdate !</h4>
            </div>');
            redirect('admin/kandidat');
        }
        else {
            redirect('admin/kandidat');
        }
    }
}