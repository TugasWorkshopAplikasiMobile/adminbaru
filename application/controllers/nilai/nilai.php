<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
	}
	public function index(){
		$data= array(
			'side'=>'tampil/side/side',
			'content'=>'tampil/nilai/nilai_v',
			'nilai'=>$this->mymodel->selectsiswafornilai());
		$this->load->view('tampil/utama/main',$data);
	}
<<<<<<< HEAD
	public function nilaisd(){
		$data= array(
			'side'=>'tampil/side/sidedirektur',
			'content'=>'tampil/nilai/nilai_v',
			'nilai'=>$this->mymodel->selectsiswafornilai());
		$this->load->view('tampil/utama/main',$data);
=======

	public function detailnilai($id)
	{
	// header('Content-Type: application/json');
		if(!$this->session->userdata('level') == 'sekretaris1'){
	    	redirect('login');
	    }else{
	      $data= array(
	  			'side'=>'tampil/side/side',
	  			'content'=>'tampil/nilai/detail',
	  			'siswa'=>$this->mymodel->detailnilai($id)->row());
 		$this->load->view('tampil/utama/main',$data);
	      // echo json_encode($data);
	  	}
>>>>>>> 9225c9828eaedcb28b25870da320ff1bb6f7c3d9
	}

}
