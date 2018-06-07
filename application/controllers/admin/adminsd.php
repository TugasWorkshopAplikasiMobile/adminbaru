<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminsd extends CI_Controller {

	public function index(){
    // $this->load->view('tampil/v_admintk');
    if(!$this->session->userdata('level') == 'adminsd'){
    	redirect('login');
    }else{
      $data= array(
  			'side'=>'tampil/side/sidesd',
  			'content'=>'tampil/siswa/siswa_v',
  			'siswa'=>$this->mymodel->selectjoin('jenjang.NAMA_JENJANG' ,"SD"));
  		$this->load->view('tampil/utama/main',$data);
  	}
  }

}
