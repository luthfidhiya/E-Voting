<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('level') != 'admin') {
            redirect('auth');
        }
    }

    
	public function index() {
        $data['title'] = 'Dasboard';
        $data['kandidat1'] = $this->db->get_where('suara', ['no_calon' => 'Calon Kandidat ke-1'])->num_rows();
        $data['kandidat2'] = $this->db->get_where('suara', ['no_calon' => 'Calon Kandidat ke-2'])->num_rows();
        $data['kandidat3'] = $this->db->get_where('suara', ['no_calon' => 'Calon Kandidat ke-3'])->num_rows();
        $data['tuser'] = $this->db->get_where('user')->num_rows();
        $data['tsuara'] = $this->db->get_where('suara')->num_rows();
        $this->load->view('templates/admin_header',$data);
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
		$this->load->view('admin/dashboard');
        $this->load->view('templates/admin_footer');
	}
}