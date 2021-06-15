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
    public function bk()
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
        redirect(base_url() . 'home_b/bk?alert=sukses1');
    }
    public function pk()
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
        redirect(base_url() . 'home_b/pk?alert=sukses1');
    }
    public function desa()
    {
        $id = $this->input->post('edit_id');
        $status = $this->input->post('edit_status');

        $where = array(
            'md_id' => $id
        );
        $data = array(
            'md_ket' => $status,
        );
        $this->m_data->update_data($where, $data, 'master_desa');
        redirect(base_url() . 'home_b/desa?alert=sukses1');
    }
    public function kec()
    {
        $id = $this->input->post('edit_id');
        $status = $this->input->post('edit_status');

        $where = array(
            'mk_id' => $id
        );
        $data = array(
            'mk_ket' => $status,
        );
        $this->m_data->update_data($where, $data, 'master_kecamatan');
        redirect(base_url() . 'home_b/kec?alert=sukses1');
    }




}