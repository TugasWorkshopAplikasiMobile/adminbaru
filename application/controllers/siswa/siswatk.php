<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswatk extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
	}
	public function index()
	{
		$data['side']='tampil/side/sidetk';
		$data['content']='tampil/menu_admin_tk/siswatk';
		$data['siswa']=$this->mymodel->siswatk1();
		$this->load->view('tampil/utama/main',$data);
	}

	public function deletesiswatk(){
		$id=$this->uri->segment(4);
		// $data['detail1']= $this->db->query("SELECT * FROM siswa WHERE id_siswa='$id'");
		$deletebyid=array('id_siswa'=>$id);
		$this->mymodel->delete('siswa',$deletebyid);
		header('location:'.base_url().'siswa/siswatk');
	}

	public function detsiswatk()
	{
		$id=$this->uri->segment(4);
		$data['detail1']= $this->db->query("SELECT * FROM siswa WHERE id_siswa='$id'");
		$data['detail2']= $this->db->query("SELECT * FROM keluarga WHERE id_siswa='$id'");
		$data['detail3']= $this->db->query("SELECT * FROM saudara_kandung_anak WHERE id_siswa='$id'");
		$data['detail4']= $this->db->query("SELECT * FROM kesehatan_anak WHERE id_siswa='$id'");
		$data['detail5']= $this->db->query("SELECT * FROM ciri_khas_anak WHERE id_siswa='$id'");
		$data['side']='tampil/side/sidetk';
		$data['content']='tampil/menu_admin_tk/detailsiswatk';
		$this->load->view('tampil/utama/main',$data);
	}

	public function updatesiswatk(){
		// header('Content-Type: application/json');
		$id=$this->input->post('id');
		// $where= array('no'=>$id);
		$where= array('id_admin'=>$id);
		$data['nama_admin']=$this->input->post('nama');
		$data['id_jenis_kelamin']=$this->input->post('jk');
		$data['no_telp_admin']=$this->input->post('tlp');
		$data['id_level']=$this->input->post('sts');
		$data['username_admin']=$this->input->post('username');
		$data['password_admin']=$this->input->post('pass');
		$this->mymodel->update('admin',$data,$where);
		header('location:'.base_url().'petugas/petugasdata');
	// echo json_encode($data);
	}

}
