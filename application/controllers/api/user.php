<?php
// use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class user extends REST_Controller{
  function __construct()
  {
	  parent::__construct();
	  $this->load->model('androidmodel');
  }
  function index_post(){
  	$api=$this->post('api');
  	if ($api=="login") {
  		$username=$_POST["username"];
  		$password=$_POST["password"];
  		$where=array('EMAIL_USER'=>$username, 'PASSWORD_USER'=>$password);
  		$cek_fase_1=$this->androidmodel->selectwhere('user',$where)->num_rows();
  		$cek_fase_2=$this->androidmodel->selectwhere('user',$where)->row();
  		if ($cek_fase_1 > 0) {
  			$data_session=array(
  				'ID_USER'=>$cek_fase_2->ID_USER,
  				'NAMA_USER'=>$cek_fase_2->NAMA_USER,
  				'EMAIL_USER'=>$cek_fase_2->EMAIL_USER,
  				'jenjang'=>$cek_fase_2->jenjang_ID_JENJANG,);
  			$message=array('succes'=>1, "data_user"=>$data_session);
  			$this->response($message, 200);
  		}
  		else{
  			$message=array('succes'=>2);
  			$this->response($message, 200);
  		}
  	}
  }
  elseif ($api=="register") {
  	
  }
}
?>
