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
	// header('Content-Type: application/json');
	public function detailnilai($id){

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
	}
	public function update(){
	$id=$this->uri->segment(4);
	$data['dataupdate']= $this->db->query("SELECT * FROM admin WHERE ID_ADMIN='$id'");
	$data['side']= 'tampil/side/side';
			// 'side'=>'tampil/side/side',
	$data['content']='tampil/nilai/nilaiupdate';
			// 'content'=>'tampil/nilai/nilaiupdate',
	$this->load->view('tampil/utama/main',$data);
	$data['nilai'] = $this->mymodel->selectsiswafornilai();
	$this->load->view('tampil/utama/main',$data);
	}

	// $id=$this->uri->segment(4);
		// $data['dataupdate']= $this->db->query("SELECT * FROM admin WHERE ID_ADMIN='$id'");
		// $data['side']= 'tampil/side/side';
		// $data['content']='tampil/petugas/e-datapetugas';
		// $this->load->view('tampil/utama/main',$data);

	public function fungsiedit(){
		header('Content-Type: application/json');
		$id=$this->input->post('id');
		// $where= array('no'=>$id);
		$where= array('ID_SISWA'=>$id);
		$data['NOMOR']=$this->input->post('no');
		$data['NAMA_SISWA']=$this->input->post('nama');
		$data['matematika']=$this->input->post('jk');
		$data['bahasa_inggris']=$this->input->post('tlp');
		$data['IPA ']=$this->input->post('sts');
		$data['Bahasa_Indonesia']=$this->input->post('username');
		$data['JUMLAH_NILAI_TEST']=$this->input->post('pass');
		$data['RATA_RATA_NILAI_TEST']=$this->input->post('pass');
		$this->mymodel->update('admin',$data,$where);
		header('location:'.base_url().'petugas/petugasdata');
	echo json_encode($data);
	}

	public function tambahdatanilai(){
	$data['side']= 'tampil/side/side';
		$data['content']='tampil/nilai/tambahnilai';
		$this->load->view('tampil/utama/main',$data);
	}

	public function update_nilai(){
	$id=$this->uri->segment(4);
	$data['dataupdate']= $this->db->query("SELECT * FROM siswa WHERE ID_SISWA='$id'");
	$data['side']= 'tampil/side/side';
			// 'side'=>'tampil/side/side',
	$data['content']='tampil/nilai/nilaiupdate';
			// 'content'=>'tampil/nilai/nilaiupdate',
	$this->load->view('tampil/utama/main',$data);
	$data['nilai'] = $this->mymodel->selectsiswafornilai();
	$this->load->view('tampil/utama/main',$data);
	}

}
