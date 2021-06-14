<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Edit extends CI_Controller
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

    public function bs()
    {
        $id = $this->input->post('edit_id');
        $status = $this->input->post('edit_status');

        $where = array(
            'd_id' => $id
        );
        $data = array(
            'd_status' => $status,
        );
        $this->m_data->update_data($where, $data, 'data');
        redirect(base_url() . 'home_b/bs?alert=sukses1');
    }




}