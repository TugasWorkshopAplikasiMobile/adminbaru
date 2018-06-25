<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswasmp extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
	}
	public function index()
	{

		// $data['side']='tampil/side';
		// $data['content']='tampil/siswa_v';
		$where  = array('jenjang.NAMA_JENJANG' =>  "SMP");
		$data= array(
			'side'=>'tampil/side/sidesmp',
			'content'=>'tampil/siswa/siswa_v',
			'siswa'=>$this->mymodel->selectjoin($where));
		$this->load->view('tampil/utama/main',$data);
	}
}
