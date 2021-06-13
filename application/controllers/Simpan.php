<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Simpan extends CI_Controller
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

    public function k_hapus($id)
    {
        $where = array(
            'mk_id' => $id
        );

        $this->m_data->delete_data($where, 'master_kecamatan');
        redirect(base_url() . 'home_b/kec?alert=gagal');
    }
    public function d_hapus($id)
    {
        $where = array(
            'md_id' => $id
        );

        $this->m_data->delete_data($where, 'master_desa');
        redirect(base_url() . 'home_b/desa?alert=gagal');
    }
    public function pk_hapus($id)
    {
        $where = array(
            'd_id' => $id
        );

        $this->m_data->delete_data($where, 'data');
        redirect(base_url() . 'home_b/pk?alert=gagal');
    }

    public function kecamatan()
    {
        $config['upload_path'] = './gambar/peta_kecamatan/';
        $config['allowed_types'] = 'jpeg|jpg|png';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('filegambar')) {

            $gambar = $this->upload->data();

            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $ibukota = $this->input->post('ibukota');
            $luas = str_replace(',', '', $this->input->post('luas'));
            $segmen = str_replace(',', '', $this->input->post('segmen'));
            $peta = $gambar['file_name'];
            $status = $this->input->post('status');

            if ($id == 0) {
                $data = array(
                    'mk_kec' => $nama,
                    'mk_ibukota' => $ibukota,
                    'mk_luas' => $luas,
                    'mk_segmen' => $segmen,
                    'mk_peta' => $peta,
                    'mk_ket' => $status,
                );

                $this->m_data->save_data($data, 'master_kecamatan');
                redirect(base_url() . 'home_b/kec?alert=sukses');
            } else {
                $where = array(
                    'mk_id' => $id
                );
                $data = array(
                    'mk_kec' => $nama,
                    'mk_ibukota' => $ibukota,
                    'mk_luas' => $luas,
                    'mk_segmen' => $segmen,
                    'mk_peta' => $peta,
                    'mk_ket' => $status,
                );
                $this->m_data->update_data($where, $data, 'master_kecamatan');
                redirect(base_url() . 'home_b/kec?alert=sukses1');
            }
        } else {
            $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
            $data['kec'] = $this->db->query("SELECT * FROM master_kecamatan ORDER BY mk_id ASC")->result();
            $this->load->view('back/v_header');
            $this->load->view('back/v_sidebar');
            $this->load->view('back/v_kec', $data);
            $this->load->view('back/v_footer');
        }
    }
    public function desa()
    {
        $config['upload_path'] = './gambar/peta_desa/';
        $config['allowed_types'] = 'jpeg|jpg|png';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('filegambar')) {

            $gambar = $this->upload->data();

            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $kecamatan = $this->input->post('kecamatan');
            $luas = str_replace(',', '', $this->input->post('luas'));
            $segmen = str_replace(',', '', $this->input->post('segmen'));
            $peta = $gambar['file_name'];
            $status = $this->input->post('status');

            if ($id == 0) {
                $data = array(
                    'md_kec' => $kecamatan,
                    'md_desa' => $nama,
                    'md_luas' => $luas,
                    'md_segmen' => $segmen,
                    'md_peta' => $peta,
                    'md_ket' => $status,
                );

                $this->m_data->save_data($data, 'master_desa');
                redirect(base_url() . 'home_b/desa?alert=sukses');
            } else {
                $where = array(
                    'md_id' => $id
                );
                $data = array(
                    'md_kec' => $kecamatan,
                    'md_desa' => $nama,
                    'md_luas' => $luas,
                    'md_segmen' => $segmen,
                    'md_peta' => $peta,
                    'md_ket' => $status,
                );
                $this->m_data->update_data($where, $data, 'master_kecamatan');
                redirect(base_url() . 'home_b/desa?alert=sukses1');
            }
        } else {
            $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
            $data['desa'] = $this->db->query("SELECT * FROM master_desa ORDER BY md_kec ASC")->result();
            $data['kec'] = $this->db->query("SELECT * FROM master_kecamatan ORDER BY mk_id ASC")->result();
            $this->load->view('back/v_header');
            $this->load->view('back/v_sidebar');
            $this->load->view('back/v_desa', $data);
            $this->load->view('back/v_footer');
        }
    }

    public function pk()
    {
        
    }
}
