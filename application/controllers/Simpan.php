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
    public function bk_hapus($id)
    {
        $where = array(
            'd_id' => $id
        );

        $this->m_data->delete_data($where, 'data');
        redirect(base_url() . 'home_b/bk?alert=gagal');
    }
    public function bs_hapus($id)
    {
        $where = array(
            'd_id' => $id
        );

        $this->m_data->delete_data($where, 'data');
        redirect(base_url() . 'home_b/bs?alert=gagal');
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
        $config['upload_path'] = './dokumen/perbup/';
        $config['allowed_types'] = 'pdf';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('filegambar')) {

            $gambar = $this->upload->data();

            $id = $this->input->post('id');
            $tentang = $this->input->post('tentang');
            $nomor = $this->input->post('nomor');
            $kec1 = $this->input->post('kec1');
            $desa1 = $this->input->post('desa1');
            $kec2 = $this->input->post('kec2');
            $desa2 = $this->input->post('desa2');
            $posisi2 = $this->input->post('posisi2');
            $p_garis2 = $this->input->post('p2');
            if ($kec1 == $kec2) {
                $d_ket2 = 2;
            } else {
                $d_ket2 = 1;
            };
            $kec3 = $this->input->post('kec3');
            $desa3 = $this->input->post('desa3');
            $posisi3 = $this->input->post('posisi3');
            $p_garis3 = $this->input->post('p3');
            if ($kec3 != null) {
                if ($kec1 == $kec3) {
                    $d_ket3 = 2;
                } else {
                    $d_ket3 = 1;
                }
            };
            $kec4 = $this->input->post('kec4');
            $desa4 = $this->input->post('desa4');
            $posisi4 = $this->input->post('posisi4');
            $p_garis4 = $this->input->post('p4');
            if ($kec4 != null) {
                if ($kec1 == $kec4) {
                    $d_ket4 = 2;
                } else {
                    $d_ket4 = 1;
                }
            };
            $kec5 = $this->input->post('kec5');
            $desa5 = $this->input->post('desa5');
            $posisi5 = $this->input->post('posisi5');
            $p_garis5 = $this->input->post('p5');
            if ($kec5 != null) {
                if ($kec1 == $kec5) {
                    $d_ket5 = 2;
                } else {
                    $d_ket5 = 1;
                }
            };
            $kec6 = $this->input->post('kec6');
            $desa6 = $this->input->post('desa6');
            $posisi6 = $this->input->post('posisi6');
            $p_garis6 = $this->input->post('p6');
            if ($kec6 != null) {
                if ($kec1 == $kec6) {
                    $d_ket6 = 2;
                } else {
                    $d_ket6 = 1;
                }
            };
            $kec7 = $this->input->post('kec7');
            $desa7 = $this->input->post('desa7');
            $posisi7 = $this->input->post('posisi7');
            $p_garis7 = $this->input->post('p7');
            if ($kec7 != null) {
                if ($kec1 == $kec7) {
                    $d_ket7 = 2;
                } else {
                    $d_ket7 = 1;
                }
            };


            $jenis = $this->input->post('jenis');
            $perbup = $gambar['file_name'];
            $status = $this->input->post('status');

            if ($id == 0) {
                $data = array(
                    'd_tentang' => $tentang,
                    'd_nomor' => $nomor,
                    'd_kec1' => $kec1,
                    'd_desa1' => $desa1,

                    'd_kec2' => $kec2,
                    'd_desa2' => $desa2,
                    'd_posisi2' => $posisi2,
                    'd_pgaris2' => $p_garis2,
                    'd_ket2' => $d_ket2,
                    'd_kec3' => $kec3,
                    'd_desa3' => $desa3,
                    'd_posisi3' => $posisi3,
                    'd_pgaris3' => $p_garis3,
                    'd_ket3' => $d_ket3,
                    'd_kec4' => $kec4,
                    'd_desa4' => $desa4,
                    'd_posisi4' => $posisi4,
                    'd_pgaris4' => $p_garis4,
                    'd_ket4' => $d_ket4,
                    'd_kec5' => $kec5,
                    'd_desa5' => $desa5,
                    'd_posisi5' => $posisi5,
                    'd_pgaris5' => $p_garis5,
                    'd_ket5' => $d_ket5,
                    'd_kec6' => $kec6,
                    'd_desa6' => $desa6,
                    'd_posisi6' => $posisi6,
                    'd_pgaris6' => $p_garis6,
                    'd_ket6' => $d_ket6,
                    'd_kec7' => $kec7,
                    'd_desa7' => $desa7,
                    'd_posisi7' => $posisi7,
                    'd_pgaris7' => $p_garis7,
                    'd_ket7' => $d_ket7,

                    'd_jenis' => $jenis,
                    'd_perbup' => $perbup,
                    'd_status' => $status,

                );

                $this->m_data->save_data($data, 'data');
                redirect(base_url() . 'home_b/pk?alert=sukses');
            }
        } else {
            $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
            $data['desa'] = $this->db->query("SELECT * FROM master_desa ORDER BY md_kec ASC")->result();
            $data['kec'] = $this->db->query("SELECT * FROM master_kecamatan ORDER BY mk_id ASC")->result();
            $data['pk'] = $this->db->query("SELECT * FROM data WHERE d_jenis=1 ORDER BY d_id desc")->result();
            $this->load->view('back/v_header');
            $this->load->view('back/v_sidebar');
            $this->load->view('back/v_pk', $data);
            $this->load->view('back/v_footer');
        }
    }
    public function bk()
    {
        $config['upload_path'] = './dokumen/ba_k/';
        $config['allowed_types'] = 'pdf';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('filegambar')) {

            $gambar = $this->upload->data();

            $id = $this->input->post('id');
            $tentang = $this->input->post('tentang');
            $nomor = $this->input->post('nomor');
            $kec1 = $this->input->post('kec1');
            $desa1 = $this->input->post('desa1');
            $kec2 = $this->input->post('kec2');
            $desa2 = $this->input->post('desa2');
            $posisi2 = $this->input->post('posisi2');
            $p_garis2 = $this->input->post('p2');
            if ($kec1 == $kec2) {
                $d_ket2 = 2;
            } else {
                $d_ket2 = 1;
            };
            $kec3 = $this->input->post('kec3');
            $desa3 = $this->input->post('desa3');
            $posisi3 = $this->input->post('posisi3');
            $p_garis3 = $this->input->post('p3');
            if ($kec3 != null) {
                if ($kec1 == $kec3) {
                    $d_ket3 = 2;
                } else {
                    $d_ket3 = 1;
                }
            };
            $kec4 = $this->input->post('kec4');
            $desa4 = $this->input->post('desa4');
            $posisi4 = $this->input->post('posisi4');
            $p_garis4 = $this->input->post('p4');
            if ($kec4 != null) {
                if ($kec1 == $kec4) {
                    $d_ket4 = 2;
                } else {
                    $d_ket4 = 1;
                }
            };
            $kec5 = $this->input->post('kec5');
            $desa5 = $this->input->post('desa5');
            $posisi5 = $this->input->post('posisi5');
            $p_garis5 = $this->input->post('p5');
            if ($kec5 != null) {
                if ($kec1 == $kec5) {
                    $d_ket5 = 2;
                } else {
                    $d_ket5 = 1;
                }
            };
            $kec6 = $this->input->post('kec6');
            $desa6 = $this->input->post('desa6');
            $posisi6 = $this->input->post('posisi6');
            $p_garis6 = $this->input->post('p6');
            if ($kec6 != null) {
                if ($kec1 == $kec6) {
                    $d_ket6 = 2;
                } else {
                    $d_ket6 = 1;
                }
            };
            $kec7 = $this->input->post('kec7');
            $desa7 = $this->input->post('desa7');
            $posisi7 = $this->input->post('posisi7');
            $p_garis7 = $this->input->post('p7');
            if ($kec7 != null) {
                if ($kec1 == $kec7) {
                    $d_ket7 = 2;
                } else {
                    $d_ket7 = 1;
                }
            };


            $jenis = $this->input->post('jenis');
            $perbup = $gambar['file_name'];
            $status = $this->input->post('status');

            if ($id == 0) {
                $data = array(
                    'd_tentang' => $tentang,
                    'd_nomor' => $nomor,
                    'd_kec1' => $kec1,
                    'd_desa1' => $desa1,

                    'd_kec2' => $kec2,
                    'd_desa2' => $desa2,
                    'd_posisi2' => $posisi2,
                    'd_pgaris2' => $p_garis2,
                    'd_ket2' => $d_ket2,
                    'd_kec3' => $kec3,
                    'd_desa3' => $desa3,
                    'd_posisi3' => $posisi3,
                    'd_pgaris3' => $p_garis3,
                    'd_ket3' => $d_ket3,
                    'd_kec4' => $kec4,
                    'd_desa4' => $desa4,
                    'd_posisi4' => $posisi4,
                    'd_pgaris4' => $p_garis4,
                    'd_ket4' => $d_ket4,
                    'd_kec5' => $kec5,
                    'd_desa5' => $desa5,
                    'd_posisi5' => $posisi5,
                    'd_pgaris5' => $p_garis5,
                    'd_ket5' => $d_ket5,
                    'd_kec6' => $kec6,
                    'd_desa6' => $desa6,
                    'd_posisi6' => $posisi6,
                    'd_pgaris6' => $p_garis6,
                    'd_ket6' => $d_ket6,
                    'd_kec7' => $kec7,
                    'd_desa7' => $desa7,
                    'd_posisi7' => $posisi7,
                    'd_pgaris7' => $p_garis7,
                    'd_ket7' => $d_ket7,

                    'd_jenis' => $jenis,
                    'd_perbup' => $perbup,
                    'd_status' => $status,

                );

                $this->m_data->save_data($data, 'data');
                redirect(base_url() . 'home_b/bk?alert=sukses');
            }
        } else {
            $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
            $data['desa'] = $this->db->query("SELECT * FROM master_desa ORDER BY md_kec ASC")->result();
            $data['kec'] = $this->db->query("SELECT * FROM master_kecamatan ORDER BY mk_id ASC")->result();
            $data['bk'] = $this->db->query("SELECT * FROM data WHERE d_jenis=2 ORDER BY d_id desc")->result();
            $this->load->view('back/v_header');
            $this->load->view('back/v_sidebar');
            $this->load->view('back/v_bk', $data);
            $this->load->view('back/v_footer');
        }
    }
    public function bs()
    {
        $config['upload_path'] = './dokumen/ba_s/';
        $config['allowed_types'] = 'pdf';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('filegambar')) {

            $gambar = $this->upload->data();

            $id = $this->input->post('id');
            $tentang = $this->input->post('tentang');
            $nomor = $this->input->post('nomor');
            $kec1 = $this->input->post('kec1');
            $desa1 = $this->input->post('desa1');
            $kec2 = $this->input->post('kec2');
            $desa2 = $this->input->post('desa2');
            $posisi2 = $this->input->post('posisi2');
            $p_garis2 = $this->input->post('p2');
            if ($kec1 == $kec2) {
                $d_ket2 = 2;
            } else {
                $d_ket2 = 1;
            };
            $kec3 = $this->input->post('kec3');
            $desa3 = $this->input->post('desa3');
            $posisi3 = $this->input->post('posisi3');
            $p_garis3 = $this->input->post('p3');
            if ($kec3 != null) {
                if ($kec1 == $kec3) {
                    $d_ket3 = 2;
                } else {
                    $d_ket3 = 1;
                }
            };
            $kec4 = $this->input->post('kec4');
            $desa4 = $this->input->post('desa4');
            $posisi4 = $this->input->post('posisi4');
            $p_garis4 = $this->input->post('p4');
            if ($kec4 != null) {
                if ($kec1 == $kec4) {
                    $d_ket4 = 2;
                } else {
                    $d_ket4 = 1;
                }
            };
            $kec5 = $this->input->post('kec5');
            $desa5 = $this->input->post('desa5');
            $posisi5 = $this->input->post('posisi5');
            $p_garis5 = $this->input->post('p5');
            if ($kec5 != null) {
                if ($kec1 == $kec5) {
                    $d_ket5 = 2;
                } else {
                    $d_ket5 = 1;
                }
            };
            $kec6 = $this->input->post('kec6');
            $desa6 = $this->input->post('desa6');
            $posisi6 = $this->input->post('posisi6');
            $p_garis6 = $this->input->post('p6');
            if ($kec6 != null) {
                if ($kec1 == $kec6) {
                    $d_ket6 = 2;
                } else {
                    $d_ket6 = 1;
                }
            };
            $kec7 = $this->input->post('kec7');
            $desa7 = $this->input->post('desa7');
            $posisi7 = $this->input->post('posisi7');
            $p_garis7 = $this->input->post('p7');
            if ($kec7 != null) {
                if ($kec1 == $kec7) {
                    $d_ket7 = 2;
                } else {
                    $d_ket7 = 1;
                }
            };


            $jenis = $this->input->post('jenis');
            $perbup = $gambar['file_name'];
            $status = $this->input->post('status');

            if ($id == 0) {
                $data = array(
                    'd_tentang' => $tentang,
                    'd_nomor' => $nomor,
                    'd_kec1' => $kec1,
                    'd_desa1' => $desa1,

                    'd_kec2' => $kec2,
                    'd_desa2' => $desa2,
                    'd_posisi2' => $posisi2,
                    'd_pgaris2' => $p_garis2,
                    'd_ket2' => $d_ket2,
                    'd_kec3' => $kec3,
                    'd_desa3' => $desa3,
                    'd_posisi3' => $posisi3,
                    'd_pgaris3' => $p_garis3,
                    'd_ket3' => $d_ket3,
                    'd_kec4' => $kec4,
                    'd_desa4' => $desa4,
                    'd_posisi4' => $posisi4,
                    'd_pgaris4' => $p_garis4,
                    'd_ket4' => $d_ket4,
                    'd_kec5' => $kec5,
                    'd_desa5' => $desa5,
                    'd_posisi5' => $posisi5,
                    'd_pgaris5' => $p_garis5,
                    'd_ket5' => $d_ket5,
                    'd_kec6' => $kec6,
                    'd_desa6' => $desa6,
                    'd_posisi6' => $posisi6,
                    'd_pgaris6' => $p_garis6,
                    'd_ket6' => $d_ket6,
                    'd_kec7' => $kec7,
                    'd_desa7' => $desa7,
                    'd_posisi7' => $posisi7,
                    'd_pgaris7' => $p_garis7,
                    'd_ket7' => $d_ket7,

                    'd_jenis' => $jenis,
                    'd_perbup' => $perbup,
                    'd_status' => $status,

                );

                $this->m_data->save_data($data, 'data');
                redirect(base_url() . 'home_b/bs?alert=sukses');
            }
        } else {
            $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
            $data['desa'] = $this->db->query("SELECT * FROM master_desa ORDER BY md_kec ASC")->result();
            $data['kec'] = $this->db->query("SELECT * FROM master_kecamatan ORDER BY mk_id ASC")->result();
            $data['bs'] = $this->db->query("SELECT * FROM data WHERE d_jenis=3 ORDER BY d_id desc")->result();
            $this->load->view('back/v_header');
            $this->load->view('back/v_sidebar');
            $this->load->view('back/v_bs', $data);
            $this->load->view('back/v_footer');
        }
    }

    public function pk_peta()
    {
        $config['upload_path'] = './gambar/peta_penetapan/';
        $config['allowed_types'] = 'jpeg|jpg|png';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('filegambar')) {

            $gambar = $this->upload->data();
            $peta = $gambar['file_name'];
            $id = $this->input->post('tambah_id');

            $where = array(
                'd_id' => $id
            );
            $data = array(
                'd_peta' => $peta,
            );
            $this->m_data->update_data($where, $data, 'data');
            redirect(base_url() . 'home_b/pk?alert=sukses3');
        } else {
            $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
            $data['desa'] = $this->db->query("SELECT * FROM master_desa ORDER BY md_kec ASC")->result();
            $data['kec'] = $this->db->query("SELECT * FROM master_kecamatan ORDER BY mk_id ASC")->result();
            $data['pk'] = $this->db->query("SELECT * FROM data WHERE d_jenis=1 ORDER BY d_id desc")->result();
            $this->load->view('back/v_header');
            $this->load->view('back/v_sidebar');
            $this->load->view('back/v_pk', $data);
            $this->load->view('back/v_footer');
        }
    }
    public function bk_peta()
    {
        $config['upload_path'] = './gambar/peta_kesepakatan/';
        $config['allowed_types'] = 'jpeg|jpg|png';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('filegambar')) {

            $gambar = $this->upload->data();
            $peta = $gambar['file_name'];
            $id = $this->input->post('tambah_id');

            $where = array(
                'd_id' => $id
            );
            $data = array(
                'd_peta' => $peta,
            );
            $this->m_data->update_data($where, $data, 'data');
            redirect(base_url() . 'home_b/bk?alert=sukses3');
        } else {
            $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
            $data['desa'] = $this->db->query("SELECT * FROM master_desa ORDER BY md_kec ASC")->result();
            $data['kec'] = $this->db->query("SELECT * FROM master_kecamatan ORDER BY mk_id ASC")->result();
            $data['bk'] = $this->db->query("SELECT * FROM data WHERE d_jenis=2 ORDER BY d_id desc")->result();
            $this->load->view('back/v_header');
            $this->load->view('back/v_sidebar');
            $this->load->view('back/v_bk', $data);
            $this->load->view('back/v_footer');
        }
    }
    public function bs_peta()
    {
        $config['upload_path'] = './gambar/peta_sengketa/';
        $config['allowed_types'] = 'jpeg|jpg|png';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('filegambar')) {

            $gambar = $this->upload->data();
            $peta = $gambar['file_name'];
            $id = $this->input->post('tambah_id');

            $where = array(
                'd_id' => $id
            );
            $data = array(
                'd_peta' => $peta,
            );
            $this->m_data->update_data($where, $data, 'data');
            redirect(base_url() . 'home_b/bs?alert=sukses3');
        } else {
            $this->form_validation->set_message('filegambar', $data['gambar_error'] = $this->upload->display_errors());
            $data['desa'] = $this->db->query("SELECT * FROM master_desa ORDER BY md_kec ASC")->result();
            $data['kec'] = $this->db->query("SELECT * FROM master_kecamatan ORDER BY mk_id ASC")->result();
            $data['bk'] = $this->db->query("SELECT * FROM data WHERE d_jenis=3 ORDER BY d_id desc")->result();
            $this->load->view('back/v_header');
            $this->load->view('back/v_sidebar');
            $this->load->view('back/v_bs', $data);
            $this->load->view('back/v_footer');
        }
    }
}
