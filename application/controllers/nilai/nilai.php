<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
	}

	//Nek kok pecah dewe2 yo gpp per sembarang aku tak kumpulno kene

	//View ne tak pecah pecah gae nilai cmn dadi siji iki kontoler e

	public function index()
	{
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/nilai/nilai_v';
		$data['nilai']=$this->mymodel->selectsiswafornilaitk();
	 	$this->load->view('tampil/utama/main',$data);
	}
	public function nisd()
	{
		$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/nilai/nilaisd';
	 	$this->load->view('tampil/utama/main',$data);
	}
	public function nismp()
	{
		$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/nilai/nilaismp';
	 	$this->load->view('tampil/utama/main',$data);
	}

	// View Detail
	public function detnilaitk()
	{
		$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/nilai/nilaiupdate';
	 	$this->load->view('tampil/utama/main',$data);
	}
	public function detnilaisd()
	{
		$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/nilai/nilaiupdatesd';
	 	$this->load->view('tampil/utama/main',$data);
	}
	public function detnilaismp()
	{
		$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/nilai/nilaiupdatesmp';
	 	$this->load->view('tampil/utama/main',$data);
	}


}
//jgn di buang

// SENGAJA TAK MATIKAN AKU AGAK BINGUNG LIAT E @TOPER SEK SABAR OTW VIEW NE IKI SOLA ERROR TEKAN QUERY DADI YO ZZZZ



	// /public function index(){
	//	$data= array(
	//		'side'=>'tampil/side/side',
	//		'content'=>'tampil/nilai/nilai_v',
	//		'nilai'=>$this->mymodel->selectsiswafornilai());
	//	$this->load->view('tampil/utama/main',$data);
//	}

	//public function nilaisd(){
	//	$data= array(
	//		'side'=>'tampil/side/sidedirektur',
	//		'content'=>'tampil/nilai/nilai_v',
	//		'nilai'=>$this->mymodel->selectsiswafornilai());
	//	$this->load->view('tampil/utama/main',$data);
	//}
	// header('Content-Type: application/json');


//	public function detailnilai($id){
//
//		if(!$this->session->userdata('level') == 'sekretaris1'){
//	    	redirect('login');
//	    }else{
//	      $data= array(
//	  			'side'=>'tampil/side/side',
//	  			'content'=>'tampil/nilai/detail',
//	  			'siswa'=>$this->mymodel->detailnilai($id)->row());
 //		$this->load->view('tampil/utama/main',$data);
	      // echo json_encode($data);
	  //	}
//	}//
//	/public function update(){
		// header('Content-Type: application/json');
//	$id=$this->uri->segment(4);
//	$data= array(
//		'side'=>'tampil/side/side',
//		'content'=>'tampil/nilai/nilaiupdate',
//		'nilai'=>$this->mymodel->selectsiswafornilaiupdate($id));
//	$this->load->view('tampil/utama/main',$data);
	// echo json_encode($data);
//	}
	// $id=$this->uri->segment(4);
		// $data['dataupdate']= $this->db->query("SELECT * FROM admin WHERE ID_ADMIN='$id'");
		// $data['side']= 'tampil/side/side';
		// $data['content']='tampil/petugas/e-datapetugas';
		// $this->load->view('tampil/utama/main',$data);

//	public function fungsiedit(){
		// header('Content-Type: application/json');
//		$id=$this->input->post('id');
		// $where= array('no'=>$id);
//		$where= array('ID_SISWA'=>$id);
		// $data['NOMOR']=$this->input->post('no');
		// $data['NAMA_SISWA']=$this->input->post('nama');
//		$data['matematika']=$this->input->post('matematika');
//		$data['bahasa_inggris']=$this->input->post('bahasa_inggris');
//		$data['IPA ']=$this->input->post('IPA');
//		$data['Bahasa_Indonesia']=$this->input->post('Bahasa_Indonesia');
//		$data['JUMLAH_NILAI_TEST']=$this->input->post('JUMLAH_NILAI_TEST');
//		$data['RATA_RATA_NILAI_TEST']=$this->input->post('RATA_RATA_NILAI_TEST');
//		$this->mymodel->update('siswa',$data,$where);
//		header('location:'.base_url().'nilai/nilai_v');
	// echo json_encode($data);
//	}
//
//	public function tambahdatanilai(){
//	$data['side']= 'tampil/side/side';
//		$data['content']='tampil/nilai/tambahnilai';
//		$this->load->view('tampil/utama/main',$data);
//	}

//	public function update_nilai(){
//	$id=$this->uri->segment(4);
//	$data['dataupdate']= $this->db->query("SELECT * FROM siswa WHERE ID_SISWA='$id'");
//	$data['side']= 'tampil/side/side';
			// 'side'=>'tampil/side/side',
//	$data['content']='tampil/nilai/nilaiupdate';
			// 'content'=>'tampil/nilai/nilaiupdate',
//	$this->load->view('tampil/utama/main',$data);
//	$data['nilai'] = $this->mymodel->selectsiswafornilai();
//	}
//
//}
