<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home_b extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        
        $this->load->model('m_data');
        if ($this->session->userdata('status') != "telah_login") {
            redirect(base_url() . 'login?alert=belum_login');
        }
    }

    public function index()
    {           
        $this->load->view('back/v_header');
        $this->load->view('back/v_sidebar');
        $this->load->view('back/v_body');
        $this->load->view('back/v_footer');
    }
    public function kec()
    {           
        $data['kec'] = $this->db->query("SELECT * FROM master_kecamatan ORDER BY mk_id ASC")->result();
        $this->load->view('back/v_header');
        $this->load->view('back/v_sidebar');
        $this->load->view('back/v_kec', $data);
        $this->load->view('back/v_footer');
    }
    public function desa()
    {           
        $data['desa'] = $this->db->query("SELECT * FROM master_desa ORDER BY md_kec ASC")->result();
        $data['kec'] = $this->db->query("SELECT * FROM master_kecamatan ORDER BY mk_id ASC")->result();
        $this->load->view('back/v_header');
        $this->load->view('back/v_sidebar');
        $this->load->view('back/v_desa', $data);
        $this->load->view('back/v_footer');
    }

    public function periksa()
	{
		
		$kec = $this->input->post('cam');
		$data = $this->db->query("SELECT * FROM master_desa WHERE md_kec='".$kec."'")->result();
		
		$myJSON=json_encode($data);
		echo $myJSON;		   
    }

    public function pk()
    {                   
        $data['desa'] = $this->db->query("SELECT * FROM master_desa ORDER BY md_kec ASC")->result();
        $data['kec'] = $this->db->query("SELECT * FROM master_kecamatan ORDER BY mk_id ASC")->result();
        $data['pk'] = $this->db->query("SELECT * FROM data WHERE d_jenis=1 ORDER BY d_id desc")->result();
        $this->load->view('back/v_header');
        $this->load->view('back/v_sidebar');
        $this->load->view('back/v_pk', $data);
        $this->load->view('back/v_footer');
    }
    public function pengguna()
    {
        $data['guna'] = $this->db->query("SELECT * FROM pengguna order by p_id desc")->result();
        $this->load->view('back/v_header');
        $this->load->view('back/v_sidebar');
        $this->load->view('back/v_pengguna', $data);
        $this->load->view('back/v_footer');
    }
    public function keluar()
    {
        $this->session->sess_destroy();
        redirect(base_url() .'welcome/login?alert=logout');
    }
}