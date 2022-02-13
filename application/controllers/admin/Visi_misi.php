<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_misi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('VisiMisiModel');
        if ($this->session->userdata('level') != 'admin') {
            redirect('auth');
        }
    }

	public function index() {
        $data['title'] = 'Visi & Misi';
        $data['rows'] = $this->VisiMisiModel->getVisimisi()->result();
        $this->load->view('templates/admin_header',$data);
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
		$this->load->view('admin/visimisi',$data);
        $this->load->view('templates/admin_footer');
	}

    public function edit($id) {
        $data['title'] = 'Edit Visi & Misi';
        $data['kandidat'] = $this->db->get('kandidat')->result();
        $data['row'] = $this->db->get_where('visimisi', ['id' => $id])->row();
        $this->load->view('templates/admin_header',$data);
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
		$this->load->view('admin/visimisi_edit',$data);
        $this->load->view('templates/admin_footer');
	}

    public function update() {
        $this->VisiMisiModel->update();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message3',
            '<div class="alert alert-warning alert-dismissible" style = "width:95%;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-warning"></i> Berhasil Diupdate !</h4>
            </div>');
            redirect('admin/visi_misi');
        }
        else {
            redirect('admin/visi_misi');
        }
    }
}