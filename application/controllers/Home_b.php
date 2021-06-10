<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home_b extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        // cek session yang login,
        // jika session status tidak sama dengan session telah_login, berarti pengguna belum login
        // maka halaman akan di alihkan kembali ke halaman login.
        $this->load->model('m_data');
        if ($this->session->userdata('status') != "telah_login") {
            redirect(base_url() . 'login?alert=belum_login');
        }
    }

    public function index()
    {           
        $this->load->view('back/v_header');
        // $this->load->view('back/v_sidebar');
        // $this->load->view('back/v_body');
        // $this->load->view('back/v_footer');
    }