<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi extends CI_Controller {

	public function index()
	{
		$data['show']=$this->mymodel->verifikasi_semua_jenjang();
		$data['side']='tampil/side/side';
		$data['content']='tampil/verifikasi/v_verifikasi';
		$this->load->view('tampil/utama/main',$data);
	}

}
