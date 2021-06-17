<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_data');
		$this->load->helper('download');
    }

    public function download_pk_gambar($nama)
	{
		
		force_download("./gambar/peta_penetapan/$nama", NULL);
	}
    public function download_bk_gambar($nama)
	{
		
		force_download("./gambar/peta_kesepakatan/$nama", NULL);
	}
    public function download_bs_gambar($nama)
	{		
		force_download("./gambar/peta_sengketa/$nama", NULL);
	}
    public function download_perbup($nama)
	{
		
		force_download("./dokumen/perbup/$nama", NULL);
	}
    public function download_bk($nama)
	{
		
		force_download("./dokumen/ba_k/$nama", NULL);
	}
    public function download_bs($nama)
	{
		
		force_download("./dokumen/ba_s/$nama", NULL);
	}
}