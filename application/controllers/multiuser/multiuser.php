<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Multiuser extends CI_Controller {

	public function index(){
// $data['show']=$this->mymodel->select('admin');
if($this->session->userdata('level') == 'sekretaris1'){
	redirect('dashboard');
}elseif ($this->session->userdata('level') == 'admintk') {
  redirect('admintk');
}elseif ($this->session->userdata('level') == 'adminsd') {
  redirect('adminsd');
}elseif ($this->session->userdata('level') == 'adminsmp') {
  redirect('adminsmp');
}elseif ($this->session->userdata('level') == 'direktur') {
  redirect('admindirektur');
}else {
  redirect('login');
}
	}

}
