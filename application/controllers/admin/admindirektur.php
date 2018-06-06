<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admindirektur extends CI_Controller {

  public function index(){
    // $this->load->view('tampil/v_admintk');
    if(!$this->session->userdata('level') == 'admindirektur'){
    	redirect('login');
    }else{
      $data= array(
  			'side'=>'tampil/side/sidedirektur',
  			'content'=>'tampil/siswa/siswa_v',
  			'siswa'=>$this->mymodel->selectjoin('jenjang.NAMA_JENJANG'));
  		$this->load->view('tampil/utama/main',$data);
  	}
  }
}
