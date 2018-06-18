<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswasekretaris extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
	}


	//iki view tok lee ora ono query ne wes tak pateni error solae. tolong @toper SUB BAGIAN QUERY
	//BTW aku garap view iki sek minggu ngarep tak lanjut neh 
	public function index(){
		//header('Content-Type: application/json');
		// $id=$this->uri->segment(4);
		// $where  = array('user.id_jenjang' => $id);
		// $data= array(
		$data['side']='tampil/side/sidesekretaris';
		$data['content']='tampil/siswa/siswa_v';
		// 'siswa'=>$this->mymodel->siswatk1());
		$this->load->view('tampil/utama/main',$data);
		//echo json_encode($data);
	}
	public function sissd(){
		$data['side']='tampil/side/sidesekretaris';
		$data['content']='tampil/siswa/siswasd';
		$this->load->view('tampil/utama/main',$data);
	}
	public function sissmp(){
		$data['side']='tampil/side/sidesekretaris';
		$data['content']='tampil/siswa/siswasmp';
		$this->load->view('tampil/utama/main',$data);
	}



	//View Detail Siswa
	public function detsiswatk()
	{
		$data['side']='tampil/side/sidesekretaris';
		$data['content']='tampil/siswa/detailsiswatk';
		$this->load->view('tampil/utama/main',$data);
	}
	public function detsiswasd()
	{
		$data['side']='tampil/side/sidesekretaris';
		$data['content']='tampil/siswa/detailsiswasd';
		$this->load->view('tampil/utama/main',$data);
	}
	public function detsiswasmp()
	{
		$data['side']='tampil/side/sidesekretaris';
		$data['content']='tampil/siswa/detailsiswasmp';
		$this->load->view('tampil/utama/main',$data);
	}






	// Iki ndisor asline query detail siswa cman error dadi tak gaekno view ne mari ki lee sek aku absen 3 dino sek soale aku rioyoan keliling mayan akeh :v

	public function detailsiswa($id)
	{
		//header('Content-Type: application/json');
		if(!$this->session->userdata('level') == 'sekretaris1'){
	    	redirect('login');
	    }else{
	      $data= array(
	  			'side'=>'tampil/side/sekretaris',
	  			'content'=>'tampil/detailsiswa',
	  			'siswa'=>$this->mymodel->detailsiswa($id)->row());
 		$this->load->view('tampil/utama/main',$data);
	      //echo json_encode($data);
	  	}
	}
	
}
