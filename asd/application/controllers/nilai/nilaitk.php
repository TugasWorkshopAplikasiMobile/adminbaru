<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilaitk extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
	}
	public function index()
	{
		$data['side']='tampil/side/sidetk';
	 	$data['content']='tampil/menu_admin_tk/nilaitk';
		$data['nilai']=$this->mymodel->selectsiswafornilaitk();
	 	$this->load->view('tampil/utama/main',$data);
	}

	public function detnilaitk()
	{
		$id=$this->uri->segment(4);
		$data['dataupdate1']= $this->db->query("SELECT * FROM siswa WHERE id_siswa='$id'");
		$data['dataupdate2']= $this->db->query("SELECT * FROM nilai_tes WHERE id_siswa='$id'");
		$data['side']='tampil/side/sidetk';
	 	$data['content']='tampil/menu_admin_tk/nilaiupdate';
	 	$this->load->view('tampil/utama/main',$data);
	}

	public function tambahNilai(){
		$data['side']= 'tampil/side/sidetk';
		$data['content']='tampil/menu_admin_tk/nilaitambah';
		$this->load->view('tampil/utama/main',$data);
	}

public function prosesupdatetk(){
		$id['id_siswa']=$this->input->post('id_siswa');
		$datasiswa['nama_siswa']=$this->input->post('nama_siswa');
		$data['matematika']=$this->input->post('matematika');
		$data['ipa']=$this->input->post('ipa');
		$data['bahasa_inggris']=$this->input->post('bahasa_inggris');
		$data['bahasa_indonesia']=$this->input->post('bahasa_indonesia');
		$data['psikologi']=$this->input->post('psikologi');
		$data['jumlah_nilai_tes']=$this->input->post('jumlah_nilai_tes');
		$data['rata_rata_nilai_tes']=$this->input->post('rata_rata_nilai_tes');
		$this->mymodel->update('nilai_tes',$data, $id);
		header('location:'.base_url().'nilai/nilaitk');
	}

	public function proses_insert_nilai(){
		$data['id_siswa']=$this->input->post('id_siswa');
		$data['matematika']=$this->input->post('matematika');
		$data['ipa']=$this->input->post('ipa');
		$data['bahasa_inggris']=$this->input->post('bahasa_inggris');
		$data['bahasa_indonesia']=$this->input->post('bahasa_indonesia');
		$data['psikologi']=$this->input->post('psikologi');
		$data['jumlah_nilai_tes']=$this->input->post('jumlah_nilai_tes');
		$data['rata_rata_nilai_tes']=$this->input->post('rata_rata_nilai_tes');
		$this->mymodel->insert('nilai_tes', $data);
		header('location:'.base_url().'nilai/nilaitk');
	}

public function delete_nilai(){
		$id=$this->uri->segment(4);
		$deletebyid=array('id_siswa'=>$id);
		$this->mymodel->delete('siswa',$deletebyid);
		header('location:'.base_url().'nilai/nilaitk');
	}
}
