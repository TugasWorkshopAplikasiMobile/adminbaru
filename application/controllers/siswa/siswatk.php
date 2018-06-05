<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswatk extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
	}
	public function index()
	{

		// $data['side']='tampil/side';
		// $data['content']='tampil/siswa_v';
		$data= array(
			'side'=>'tampil/side/sidetk',
			'content'=>'tampil/siswa/siswa_v',
			'siswa'=>$this->mymodel->selectjoin('jenjang.NAMA_JENJANG','TK'));
		$this->load->view('tampil/utama/main',$data);
	}
}
