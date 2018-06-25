<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswasd extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
	}
	public function index()
	{
		$data['side']='tampil/side/sidesd';
		$data['content']='tampil/menu_admin_sd/siswasd';
		$data['siswa']=$this->mymodel->siswatk1();
		$this->load->view('tampil/utama/main',$data);
	}

	public function deletesiswasd(){
		$id=$this->uri->segment(4);
		$deletebyid=array('id_siswa'=>$id);
		$this->mymodel->delete('siswa',$deletebyid);
		header('location:'.base_url().'siswa/siswasd');
	}

	public function detsiswasd()
	{
		$id=$this->uri->segment(4);
		$data['detail1']= $this->db->query("SELECT * FROM siswa WHERE id_siswa='$id'");
		$data['detail2']= $this->db->query("SELECT * FROM keluarga WHERE id_siswa='$id'");
		$data['detail3']= $this->db->query("SELECT * FROM saudara_kandung_anak WHERE id_siswa='$id'");
		$data['detail4']= $this->db->query("SELECT * FROM kesehatan_anak WHERE id_siswa='$id'");
		$data['detail5']= $this->db->query("SELECT * FROM ciri_khas_anak WHERE id_siswa='$id'");
		$data['side']='tampil/side/sidesd';
		$data['content']='tampil/menu_admin_sd/detailsiswasd';
		$this->load->view('tampil/utama/main',$data);
	}

	public function updatesiswasd(){
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
		header('location:'.base_url().'siswa/siswatk');
	// echo json_encode($data);
	}

	public function pgsd(){
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
