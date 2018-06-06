<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi_semua_jenjang_update extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('mymodel');
    }


    public function index()
    {
      $data['show']=$this->mymodel->verifikasi_semua_jenjang();
      $data['side']='tampil/side/side';
      $data['content']='tampil/verifikasi/v_verifikasi';
      $this->load->view('tampil/utama/main',$data);
    }

  public function editData(){
    // $no_id = array('id' => $id);
    // $data['user'] = $this->mymodel->edit_verifikasi_semua_jenjang($no_id, 'user');
    $data['side']='tampil/side/side';
    $data['content']='tampil/verifikasi/v_verifikasi_update';
    $this->load->view('tampil/utama/main',$data);
  }

}
