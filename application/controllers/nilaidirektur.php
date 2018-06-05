<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilaidirektur extends CI_Controller {
	public function index()
	{
// $data['show']=$this->mymodel->select('admin');
		$data['side']='tampil/sidedirektur';
		$data['content']='tampil/nilai_v';
		$this->load->view('tampil/main',$data);
	}
}
