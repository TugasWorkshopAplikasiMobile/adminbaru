<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi extends CI_Controller {

	public function index()
	{
		$data['show']=$this->mymodel->verifikasi();
		$data['side']='tampil/side/side';
		$data['content']='tampil/verifikasi/verifikasi_v';
		$this->load->view('tampil/utama/main',$data);
	}

}
