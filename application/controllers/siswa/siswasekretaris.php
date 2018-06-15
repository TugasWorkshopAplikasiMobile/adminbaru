<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswasekretaris extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
	}
	public function index()
	{
		//header('Content-Type: application/json');
		// $id=$this->uri->segment(4);
		// $where  = array('user.id_jenjang' => $id);
		$data= array(
			'side'=>'tampil/side/sidesekretaris',
			'content'=>'tampil/siswa/siswa_v',
			'siswa'=>$this->mymodel->siswatk1());
		$this->load->view('tampil/utama/main',$data);
		//echo json_encode($data);
	}

	public function detailsiswa($id)
	{
		//header('Content-Type: application/json');
		if(!$this->session->userdata('level') == 'sekretaris1'){
	    	redirect('login');
	    }else{
	      $data= array(
	  			'side'=>'tampil/side/side',
	  			'content'=>'tampil/detailsiswa',
	  			'siswa'=>$this->mymodel->detailsiswa($id)->row());
 		$this->load->view('tampil/utama/main',$data);
	      //echo json_encode($data);
	  	}
	}
}
