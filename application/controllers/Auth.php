<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


 public function __construct()
 {
    parent::__construct();
     $this->load->library('form_validation');
 }

public function index () {
    $data['title'] = 'E-Voting Home';
    $data['kelas'] = $this->db->get('kelas')->result();
    $this->load->view('templates/header_auth', $data);
    $this->load->view('auth', $data);
    $this->load->view('templates/footer_auth');
}


public function regristrasi () {

    $this->form_validation->set_rules('nama1','Nama', 'trim|required', [

    ]);

    $this->form_validation->set_rules('email1','Email', 'trim|required|is_unique[user.email]', [
        'is_unique' => 'email sudah ada'
    ]);

    $this->form_validation->set_rules('password1','Password', 'trim|required', [

    ]);

    if ($this->form_validation->run() == FALSE) {
        $this->index();
        echo "<script> alert('Email sudah ada, gagal meregristasi akun') </script>";
    } else {
        $data = [
            'id_kelas' => $this->input->post('id_kelas1', true),
            'nama' => $this->input->post('nama1', true),
            'email' => $this->input->post('email1', true),
            'password' => password_hash($this->input->post('password1', true), PASSWORD_DEFAULT),
            'level' => 'siswa'
        ];

        $this->db->insert('user', $data);
        if ($this->db->affected_rows() > 0) {
            echo "<script>
            alert('berhasil meregristasi akun');
            window.location.href = '". site_url('auth') . "';
            </script>";
        }
    }
}


public function login() {
    $cek_email = $this->db->get_where('user', ['email' => $this->input->post('email', true)])->row();

    if ($cek_email) { // jika email ada

        if(password_verify($this->input->post('password'), $cek_email->password)) {//jika password sama

            if ($cek_email->level =='admin') {

                $data_session = [
                    'id' => $cek_email->id,
                    'nama' => $cek_email->nama,
                    'level' => $cek_email->level,
                ];

                $this->session->set_userdata($data_session);
                redirect('admin/dashboard');

            } else {
                $data_session = [
                    'id' => $cek_email->id,
                    'nama' => $cek_email->nama,
                    'level' => $cek_email->level,
                ];

                $this->session->set_userdata($data_session);
                redirect('home');
            }


        } else {
            echo "<script>
            alert('Password anda salah');
            window.location.href = '". site_url('auth') . "';
            </script>";
        }
    } else {  //jika tidak ada
            echo "<script>
            alert('Email anda salah');
            window.location.href = '". site_url('auth') . "';
            </script>";
    }
        
}


public function logout() {
    $this->session->sess_destroy();
    redirect('auth');
}

}