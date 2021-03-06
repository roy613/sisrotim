<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        // $this->load->model('Kecamatan');
        $this->load->model('M_data');
		$this->load->helper('download');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// public function index()
	// {
	// 	$this->load->view('front/new/v_tes');
	// }
	public function index()
	{
		$this->load->view('front/new/v_body');
	}
	public function about()
	{
		$this->load->view('front/new/v_header');
		$this->load->view('front/new/v_about');
		$this->load->view('front/new/v_footer');
	}
	public function protas()
	{
		$data['aa'] = $this->db->query("SELECT * FROM master_kecamatan WHERE mk_ket=1")->result();
		$data['p']= $this->db->query("SELECT * FROM data WHERE d_jenis=1")->num_rows();
		$data['k']= $this->db->query("SELECT * FROM data WHERE d_jenis=2")->num_rows();
		$data['s']= $this->db->query("SELECT * FROM data WHERE d_jenis=3")->num_rows();
		$data['pbp']= $this->db->query("SELECT * FROM data WHERE d_jenis=1")->result();
		$data['ksp']= $this->db->query("SELECT * FROM data WHERE d_jenis=2")->result();
		$data['skt']= $this->db->query("SELECT * FROM data WHERE d_jenis=3")->result();
		$this->load->view('front/new/v_header', $data);
		$this->load->view('front/new/v_kd');
		$this->load->view('front/new/v_footer', $data);
	}
	public function periksa()
	{
		
		$kec = $this->input->post('cam');
		$data = $this->db->query("SELECT * FROM master_desa WHERE md_kec='".$kec."' AND md_ket=1")->result();
		
		$myJSON=json_encode($data);
		echo $myJSON;		   
    }

	public function kecamatan()
	{
		$cam = $this->input->post('kecamatan');
		$data['p'] = $this->db->query("SELECT * FROM data WHERE ((d_kec1='".$cam."' AND d_ket2=1) OR (d_kec1='".$cam."' AND d_ket3=1) OR (d_kec1='".$cam."' AND d_ket4=1) OR (d_kec1='".$cam."' AND d_ket5=1) OR (d_kec1='".$cam."' AND d_ket6=1) OR (d_kec1='".$cam."' AND d_ket7=1) OR (d_kec2='".$cam."' AND d_ket2=1) OR (d_kec3='".$cam."' AND d_ket3=1) OR (d_kec4='".$cam."' AND d_ket4=1) OR (d_kec5='".$cam."' AND d_ket5=1) OR (d_kec6='".$cam."' AND d_ket6=1) OR (d_kec7='".$cam."' AND d_ket7=1)) AND d_status=1 AND d_jenis=1")->num_rows();
		$data['k'] = $this->db->query("SELECT * FROM data WHERE ((d_kec1='".$cam."' AND d_ket2=1) OR (d_kec1='".$cam."' AND d_ket3=1) OR (d_kec1='".$cam."' AND d_ket4=1) OR (d_kec1='".$cam."' AND d_ket5=1) OR (d_kec1='".$cam."' AND d_ket6=1) OR (d_kec1='".$cam."' AND d_ket7=1) OR (d_kec2='".$cam."' AND d_ket2=1) OR (d_kec3='".$cam."' AND d_ket3=1) OR (d_kec4='".$cam."' AND d_ket4=1) OR (d_kec5='".$cam."' AND d_ket5=1) OR (d_kec6='".$cam."' AND d_ket6=1) OR (d_kec7='".$cam."' AND d_ket7=1)) AND d_status=1 AND d_jenis=2")->num_rows();
		$data['s'] = $this->db->query("SELECT * FROM data WHERE ((d_kec1='".$cam."' AND d_ket2=1) OR (d_kec1='".$cam."' AND d_ket3=1) OR (d_kec1='".$cam."' AND d_ket4=1) OR (d_kec1='".$cam."' AND d_ket5=1) OR (d_kec1='".$cam."' AND d_ket6=1) OR (d_kec1='".$cam."' AND d_ket7=1) OR (d_kec2='".$cam."' AND d_ket2=1) OR (d_kec3='".$cam."' AND d_ket3=1) OR (d_kec4='".$cam."' AND d_ket4=1) OR (d_kec5='".$cam."' AND d_ket5=1) OR (d_kec6='".$cam."' AND d_ket6=1) OR (d_kec7='".$cam."' AND d_ket7=1)) AND d_status=1 AND d_jenis=3")->num_rows();
		
		$data['qq'] = $this->db->query("SELECT * FROM data WHERE (d_kec1='".$cam."' OR d_kec2='".$cam."' OR d_kec3='".$cam."'OR d_kec4='".$cam."' OR d_kec5='".$cam."' OR d_kec6='".$cam."' OR d_kec7='".$cam."') AND d_status=1 ORDER BY d_id ASC")->result();
		
		$data['aq'] = $this->db->query("SELECT * FROM master_kecamatan WHERE mk_kec='".$cam."'")->result();
		$data['aa'] = $this->db->query("SELECT * FROM master_kecamatan WHERE mk_ket=1")->result();
		$data['ab'] = $cam;
		$this->load->view('front/new/v_header');
		$this->load->view('front/new/v_cam', $data);
		$this->load->view('front/new/v_footer');
	}
	public function desa()
	{
		$cam = $this->input->post('desa1');
		$data['p'] = $this->db->query("SELECT * FROM data WHERE (d_desa1='".$cam."' OR d_desa2='".$cam."' OR d_desa3='".$cam."' OR d_desa4='".$cam."' OR d_desa5='".$cam."' OR d_desa6='".$cam."' OR d_desa7='".$cam."') AND d_status=1 AND d_jenis=1")->num_rows();
		$data['k'] = $this->db->query("SELECT * FROM data WHERE (d_desa1='".$cam."' OR d_desa2='".$cam."' OR d_desa3='".$cam."' OR d_desa4='".$cam."' OR d_desa5='".$cam."' OR d_desa6='".$cam."' OR d_desa7='".$cam."') AND d_status=1 AND d_jenis=2")->num_rows();
		$data['s'] = $this->db->query("SELECT * FROM data WHERE (d_desa1='".$cam."' OR d_desa2='".$cam."' OR d_desa3='".$cam."' OR d_desa4='".$cam."' OR d_desa5='".$cam."' OR d_desa6='".$cam."' OR d_desa7='".$cam."') AND d_status=1 AND d_jenis=3")->num_rows();
		
		
		$data['qq'] = $this->db->query("SELECT * FROM data WHERE (d_desa1='".$cam."' OR d_desa2='".$cam."' OR d_desa3='".$cam."'OR d_desa4='".$cam."' OR d_desa5='".$cam."' OR d_desa6='".$cam."' OR d_desa7='".$cam."') AND d_status=1 ORDER BY d_id ASC")->result();
		$data['aq'] = $this->db->query("SELECT * FROM master_desa WHERE md_desa='".$cam."'")->result();
		$data['aa'] = $this->db->query("SELECT * FROM master_kecamatan WHERE mk_ket=1")->result();
		$data['ab'] = $cam;
		$this->load->view('front/new/v_header');
		$this->load->view('front/new/v_desa', $data);
		$this->load->view('front/new/v_footer');
	}
	
	public function login()
	{
		$this->load->view('front/new/v_login');
	}

    public function login_aksi()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() != false) {
            
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $where = array(
                'username' => $username,
                'pass' => md5($password),
            );
            $this->load->model('m_data');
            $cek = $this->m_data->cek_login('pengguna', $where)->num_rows();
            if ($cek > 0) {
               
                $data = $this->m_data->cek_login('pengguna', $where)->row();
                $data_session = array(
                    'id' => $data->p_id,
                    'username' => $data->username,                    
                    'status' => 'telah_login'
                );
                $this->session->set_userdata($data_session);
                redirect(base_url() . 'home_b');
            } else {
                redirect(base_url() . 'login?alert=gagal');
            }
        } else {
            $this->load->view('front/new/v_login');
        }
    } 

	
}

