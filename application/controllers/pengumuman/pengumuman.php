<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {
	public function index()
	{
// $data['show']=$this->mymodel->select('admin');
		$data['side']='tampil/side/sidesekretaris';
		$data['content']='tampil/pengumuman/pengumuman_v';
		$this->load->view('tampil/utama/main',$data);
	}

	//view tampilan form data awal verivikasi user baru

	 public function pgtk(){
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/pengumuman/usertk';
	 	$this->load->view('tampil/utama/main',$data);
	}
	 public function pgsd(){
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/pengumuman/usersd';
	 	$this->load->view('tampil/utama/main',$data);
	 }
	 public function pgsmp(){
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/pengumuman/usersmp';
	 	$this->load->view('tampil/utama/main',$data);

	 }

	 // Update Verivikasi Function

	 public function dttk(){
	 	//update data tk (view)
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/pengumuman/updatetk';
	 	$this->load->view('tampil/utama/main',$data);
	 }
	  public function dtsd(){
	 	//update data sd (view)
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/pengumuman/updatesd';
	 	$this->load->view('tampil/utama/main',$data);
	 }
	  public function dtsmp(){
	 	//update data smp (view)
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/pengumuman/updatesmp';
	 	$this->load->view('tampil/utama/main',$data);
	 }

}
