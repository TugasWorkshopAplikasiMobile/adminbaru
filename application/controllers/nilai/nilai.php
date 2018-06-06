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
	public function nilaisd(){
		$data= array(
			'side'=>'tampil/side/sidedirektur',
			'content'=>'tampil/nilai/nilai_v',
			'nilai'=>$this->mymodel->selectsiswafornilai());
		$this->load->view('tampil/utama/main',$data);
	}

}
