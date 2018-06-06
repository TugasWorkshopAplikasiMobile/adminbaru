<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class petugas extends CI_Controller {

	public function index()
	{
		$data['show']=$this->mymodel->select('admin');
		$this->load->view('Showdata',$data);
	}
	public function showinsert()
	{
		$this->load->view('Insertdata');
	}
	public function insertdata()
	{

		$data['NAMA_ADMIN']=$this->input->post('namadata');
		$data['JENIS_KELAMIN']=$this->input->post('jkdata');
		$data['NO_TELP']=$this->input->post('telpdata');
		$data['STATUS']=$this->input->post('statusdata');
		$data['USERNAME_ADMIN']=$this->input->post('userdata');
		$data['PASSWORD_ADMIN']=$this->input->post('passworddata');
		$this->mymodel->insert('admin',$data);
		header('location:'.base_url().'index.php/petugas');
	}

	public function updatedata()
	{
		$id=$this->input->post('id');
		// $where= array('no'=>$id);
		$where= array('ID_ADMIN'=>$id);
		$data['NAMA_ADMIN']=$this->input->post('nama');
		$data['JENIS_KELAMIN']=$this->input->post('jeniskelamin');
		$data['NO_TELP']=$this->input->post('notelp');
		$data['STATUS']=$this->input->post('status');
		$data['USERNAME_ADMIN']=$this->input->post('username');
		$data['PASSWORD_ADMIN']=$this->input->post('password');
		$this->mymodel->update('admin',$data,$where);
		header('location:'.base_url().'index.php/petugas');
	}

	public function deletedata()
	{
		$id=$this->uri->segment(3);
		$delete=array('ID_ADMIN'=>$id);
		$this->mymodel->delete('admin',$delete);
		header('location:'.base_url().'index.php/petugas');
	}
}
