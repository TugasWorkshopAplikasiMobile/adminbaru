<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminsd extends CI_Controller {

	public function index(){
    // $this->load->view('tampil/v_admintk');
    if(!$this->session->userdata('level') == 'adminsd'){
    	redirect('login');
    }else{
      $data= array(
  			'side'=>'tampil/sidesd',
  			'content'=>'tampil/siswa_v',
  			'siswa'=>$this->mymodel->selectjoin());
  		$this->load->view('tampil/main',$data);
  	}
  }

}
