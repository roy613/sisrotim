<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Kecamatan');
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
		$data['aa'] = $this->db->query("SELECT * FROM master_kecamatan")->result();
		// $data['ab'] = $this->db->query("SELECT * FROM master_desa")->result();
		// $data = array(
        //     'kecamatan' => $this->Kecamatan->get_kecamatan(),
        //     'desa' => $this->Kecamatan->get_desa(),            
        //     'kecamatan_selected' => '',
        //     'desa_selected' => '',
            
        // );
		$this->load->view('front/new/v_header', $data);
		$this->load->view('front/new/v_kd');
		$this->load->view('front/new/v_footer');
	}
	public function periksa()
	{
		// $kec=$_GET['cam'];
		// $data = $this->db->query("SELECT * FROM master_desa WHERE md_kec=$kec")->num_rows();
		// if($data>0){
		// 	$result['status']="success";
		// 	$myJSON=json_encode($result);
		// 	echo $myJSON;
		// }else{
		// 	$result['status']="failed";
		// 	$myJSON=json_encode($result);
		// 	echo $myJSON;
		// }
	    $id = $this->input->post('id');
        $data = $this->Kecamatan_model->get_desa($id);
        echo json_encode($data);
    }

	public function kecamatan()
	{
		$cam = $this->input->post('kecamatan');
		$data['qq'] = $this->db->query("SELECT * FROM data WHERE (d_kec1='".$cam."' OR d_kec2='".$cam."' OR d_kec3='".$cam."'OR d_kec4='".$cam."' OR d_kec5='".$cam."' OR d_kec6='".$cam."' OR d_kec7='".$cam."') AND d_status=1 ORDER BY d_id ASC")->result();
		$data['aq'] = $this->db->query("SELECT * FROM master_kecamatan WHERE mk_kec='".$cam."'")->result();
		$data['aa'] = $this->db->query("SELECT * FROM master_kecamatan")->result();
		$data['ab'] = $cam;
		$this->load->view('front/new/v_header');
		$this->load->view('front/new/v_cam', $data);
		$this->load->view('front/new/v_footer');
	}
	public function desa()
	{
		$this->load->view('front/new/v_header');
		$this->load->view('front/new/v_desa');
		$this->load->view('front/new/v_footer');
	}
	
	public function login()
	{
		$this->load->view('front/new/v_login');
	}
}
