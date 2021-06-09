<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kecamatan extends CI_Model
{
    public function get_kecamatan()
        {
            $this->db->order_by('mk_kec', 'asc');
            return $this->db->get('master_kecamatan')->result();
        }

        public function get_desa()
        {
            
            $this->db->order_by('md_desa', 'asc');
            $this->db->join('master_kecamatan', 'master_desa.md_kec = master_kecamatan.mk_id');
            return $this->db->get('master_desa')->result();
        }
}