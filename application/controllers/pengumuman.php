<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {
	public function index()
	{
// $data['show']=$this->mymodel->select('admin');
		$data['side']='tampil/side';
		$data['content']='tampil/pengumuman_v';
		$this->load->view('tampil/main',$data);
	}
}
