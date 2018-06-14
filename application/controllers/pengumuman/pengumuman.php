<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {
	public function index()
	{
// $data['show']=$this->mymodel->select('admin');
		$data['side']='tampil/side/side';
		$data['content']='tampil/pengumuman/pengumuman_v';
		$this->load->view('tampil/utama/main',$data);
	}
	 public function pgtk(){
	 	$data['side']='tampil/side/side';
	 	$data['content']='tampil/pengumuman/usertk';
	 	$this->load->view('tampil/utama/main',$data);
	 }
	 public function pgsd(){
	 	$data['side']='tampil/side/side';
	 	$data['content']='tampil/pengumuman/usersd';
	 	$this->load->view('tampil/utama/main',$data);
	 }
	 public function pgsmp(){
	 	$data['side']='tampil/side/side';
	 	$data['content']='tampil/pengumuman/usersmp';
	 	$this->load->view('tampil/utama/main',$data);
	 }
}
