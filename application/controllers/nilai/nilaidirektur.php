<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilaidirektur extends CI_Controller {
	public function index()
	{
// $data['show']=$this->mymodel->select('admin');
		$data['side']='tampil/side/sidedirektur';
		$data['content']='tampil/nilai/nilai_v';
		$this->load->view('tampil/utama/main',$data);
	}
}