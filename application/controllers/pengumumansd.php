<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumumansd extends CI_Controller {
	public function index()
	{
// $data['show']=$this->mymodel->select('admin');
		$data['side']='tampil/sidesd';
		$data['content']='tampil/pengumuman_v';
		$this->load->view('tampil/main',$data);
	}
}
