<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa extends CI_Controller {
	public function index()
	{	
		// $data['show']=$this->mymodel->selectwhere('admin',$dataa);
		$data['side']='tampil/side';
		$data['content']='tampil/siswa_v';
		$this->load->view('tampil/main',$data);
	}
}