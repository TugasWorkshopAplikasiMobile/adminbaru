<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilaitk extends CI_Controller {
	public function __construct(){
		parent::__construct();	
		$this->load->model('mymodel');
	}
	public function index()
	{
		$data= array(
			'side'=>'tampil/side/sidetk',
			'content'=>'tampil/nilai/nilaip_v',
			'nilai'=>$this->mymodel->selectsiswafornilaitk());
		$this->load->view('tampil/utama/main',$data);
	}
}
