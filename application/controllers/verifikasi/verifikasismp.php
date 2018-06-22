<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumumansmp extends CI_Controller {
	public function index()
	{
// $data['show']=$this->mymodel->select('admin');
		$data['side']='tampil/side/sidesmp';
		$data['content']='tampil/pengumuman/pengumuman_v';
		$this->load->view('tampil/utama/main',$data);
	}
}
