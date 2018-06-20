<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi extends CI_Controller {


	//tampilan layout table kontroler

	public function index()
	{
	//	$data['show']=$this->mymodel->verifikasi_semua_jenjang();
		$data['side']='tampil/side/sidesekretaris';
		$data['content']='tampil/verifikasi/v_verifikasi';
		$this->load->view('tampil/utama/main',$data);
	}

	public function versd()
	{
		$data['side']='tampil/side/sidesekretaris';
		$data['content']='tampil/verifikasi/verifikasisd';
		$this->load->view('tampil/utama/main',$data);
	}
	public function versmp()
	{
		$data['side']='tampil/side/sidesekretaris';
		$data['content']='tampil/verifikasi/verivikasismp';
		$this->load->view('tampil/utama/main',$data);
	}

	
//	


}
