<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugasdatadirektur extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('mymodel');
    }
	public function index()
	{
		$data['show']=$this->mymodel->select('admin');
		$data['side']='tampil/side/sidedirektur';
		$data['content']='tampil/petugas/tampilanadmin';
		$this->load->view('tampil/utama/main',$data);
	}

	public function tambahData(){
		$data['side']= 'tampil/sidedirektur';
		$data['content']='tampil/t-datapetugas';
		$this->load->view('tampil/main',$data);
	}
	public function fungsitambahdata(){
		$data['NAMA_ADMIN']=$this->input->post('nama');
		$data['JENIS_KELAMIN']=$this->input->post('jk');
		$data['NO_TELP']=$this->input->post('tlp');
		$data['STATUS']=$this->input->post('sts');
		$data['USERNAME_ADMIN']=$this->input->post('username');
		$data['PASSWORD_ADMIN']=$this->input->post('pass');
		$this->mymodel->insert('admin',$data);
		header('location:'.base_url().'petugasdatadirektur');
	}


	public function deletedata()
	{
		$id=$this->uri->segment(3);
		$delete=array('ID_ADMIN'=>$id);
		$this->mymodel->delete('admin',$delete);
		header('location:'.base_url().'petugasdatadirektur');
	}

	public function editData(){
		$id=$this->uri->segment(3);
		$data['dataupdate']= $this->db->query("SELECT * FROM admin WHERE ID_ADMIN='$id'");
		$data['side']= 'tampil/sidedirektur';
		$data['content']='tampil/e-datapetugas';
		$this->load->view('tampil/main',$data);
	}
	public function fungsieditdata(){
		$id=$this->input->post('id');
		// $where= array('no'=>$id);
		$where= array('ID_ADMIN'=>$id);
		$data['NAMA_ADMIN']=$this->input->post('nama');
		$data['JENIS_KELAMIN']=$this->input->post('jk');
		$data['NO_TELP']=$this->input->post('tlp');
		$data['STATUS']=$this->input->post('sts');
		$data['USERNAME_ADMIN']=$this->input->post('username');
		$data['PASSWORD_ADMIN']=$this->input->post('pass');
		$this->mymodel->update('admin',$data,$where);
		header('location:'.base_url().'petugasdatadirektur');
	}
}
