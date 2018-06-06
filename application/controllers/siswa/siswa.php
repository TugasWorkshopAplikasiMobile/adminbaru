<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa extends CI_Controller {
	public function __construct(){
		parent::__construct();	
		$this->load->model('mymodel');
	}
	public function index()
	{	

		// $data['side']='tampil/side';
		// $data['content']='tampil/siswa_v';
		//header('Content-Type: application/json');
		$where  = array('jenjang.NAMA_JENJANG' =>  "TK");
		$data= array(
			'side'=>'tampil/side/side',
			'content'=>'tampil/siswa/siswa_v',
			'siswa'=>$this->mymodel->selectjoin($where));
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