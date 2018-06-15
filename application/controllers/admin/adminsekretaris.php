<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminsekretaris extends CI_Controller {

	public function index(){
if(!$this->session->userdata('level') == '4'){
	redirect('login');
}else{
	$data['side']='tampil/side/sidesekretaris';
	$data['content']='tampil/utama/v_dashboard';
	$this->load->view('tampil/utama/main',$data);
}
}

// public function njajal(){
// 	$data['show'] = $this->mymodel->njajal();
// 	$this->load->view('cek', $data);
// }

}
