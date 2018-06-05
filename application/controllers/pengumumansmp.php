<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumumansmp extends CI_Controller {
	public function index()
	{
// $data['show']=$this->mymodel->select('admin');
		$data['side']='tampil/sidesmp';
		$data['content']='tampil/pengumuman_v';
		$this->load->view('tampil/main',$data);
	}
}
