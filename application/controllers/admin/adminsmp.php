<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminsmp extends CI_Controller {

	public function index(){
    // $this->load->view('tampil/v_admintk');
    if(!$this->session->userdata('level') == 'adminsmp'){
    	redirect('login');
    }else{
      $data= array(
  			'side'=>'tampil/side/sidesmp',
  			'content'=>'tampil/siswa/siswa_v',
  			'siswa'=>$this->mymodel->selectjoin());
  		$this->load->view('tampil/utama/main',$data);
  	}
  }
}
