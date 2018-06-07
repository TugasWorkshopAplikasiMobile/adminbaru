<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswasd extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
	}
	public function index()
	{

		// $data['side']='tampil/side';
		// $data['content']='tampil/siswa_v';
		$where  = array('jenjang.NAMA_JENJANG' =>  "SD");
		$data= array(
			'side'=>'tampil/side/sidesd',
			'content'=>'tampil/siswa/siswa_v',
			'siswa'=>$this->mymodel->selectjoin($where));
		$this->load->view('tampil/utama/main',$data);
		// $this->load->view('tampil/utama/main',$data);
	}
}
