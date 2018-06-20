<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	//view tampilan form data awal verivikasi user baru

	 public function pgtk(){
		// $data['pengumuman']=$this->db->query('SELECT * FROM siswa WHERE id_siswa == 1');
		$id['id_jenjang']='1';
		$data['pengumuman']=$this->mymodel->selectwhere('user', $id);
		$data['pengumuman1']=$this->mymodel->select('pendaftaran_baru');
		$data['pengumuman2']=$this->mymodel->select('siswa');
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


	 // Update Verifikasi Function
	 public function dttk(){
	 	//update data tk (view)
		$id=$this->uri->segment(4);
		$data['pengumuman']=$this->db->query("SELECT * FROM siswa WHERE id_user='$id'");
		$data['pengumuman1']=$this->db->query("SELECT * FROM pendaftaran_baru WHERE id_user='$id'");
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
