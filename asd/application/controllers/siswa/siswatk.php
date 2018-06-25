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

	public function updatedatasiswa(){
		// header('Content-Type: application/json');
		$id=$this->input->post('id');
		$where= array('id_siswa'=>$id);
		$data['nama_siswa']=$this->input->post('nama_siswa');
		$data['nama_panggilan']=$this->input->post('nama_panggilan');
		$data['tanggal_lahir_siswa']=$this->input->post('tanggal_lahir_siswa');
		$data['usia_siswa']=$this->input->post('usia_siswa');
		$data['id_jenis_kelamin']=$this->input->post('id_jenis_kelamin');
		$data['id_agama']=$this->input->post('id_agama');
		$data['id_warganegara']=$this->input->post('id_warganegara');
		$data['tinggal_bersama_siswa']=$this->input->post('tinggal_bersama_siswa');
		$data['anak_ke_siswa']=$this->input->post('anak_ke_siswa');
		$this->mymodel->update('siswa',$data,$where);
		header('location:'.base_url().'siswa/siswatk');
	// echo json_encode($data);
	}

	public function pgtk(){
	 $data['pengumuman']=$this->mymodel->pengumumantk();
	 $data['side']='tampil/side/sidetk';
	 $data['content']='tampil/menu_admin_tk/usertk';
	 $this->load->view('tampil/utama/main',$data);
	}
	// Update Verifikasi Function
	public function dttk(){
	 //update data tk (view)
	 $id=$this->uri->segment(4);
	 $data['pengumuman']=$this->mymodel->verifikasi_awal($id);
	 $data['side']='tampil/side/sidetk';
	 $data['content']='tampil/menu_admin_tk/updatetk';
	 $this->load->view('tampil/utama/main',$data);
	}
	public function proses_update_tk(){
		//proses update verifikasi pertama atau pendaftaran baru
	 $where['id_user']=$this->input->post('id_user');
	 $data['id_pembayaran']=$this->input->post('statusss');
	 $this->mymodel->update('pendaftaran_baru',$data, $where);
	 header('location:'.base_url().'siswa/siswatk/pgtk');
	}
	public function deletedatatk()
	{
	 $id=$this->uri->segment(4);
	 $deletebyid=array('id_user'=>$id);
	 $this->mymodel->delete('pendaftaran_baru',$deletebyid);
	 header('location:'.base_url().'siswa/siswatk/pgtk');
	}
}
