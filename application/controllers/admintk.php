<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admintk extends CI_Controller {

	public function index(){
    // $this->load->view('tampil/v_admintk');
    if(!$this->session->userdata('level') == 'admintk'){
    	redirect('login');
    }else{
      $data= array(
  			'side'=>'tampil/sidetk',
  			'content'=>'tampil/siswa_v',
  			'siswa'=>$this->mymodel->selectjoin());
  		$this->load->view('tampil/main',$data);
  	}
  }
}
