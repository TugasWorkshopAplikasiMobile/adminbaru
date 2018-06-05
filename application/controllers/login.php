<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
  $this->load->view('login_form.php');
	}

public function ceklogin(){
  $email = $this->input->post('username', true);
  $password = $this->input->post('password', true);
  $cek = $this->mymodel->ceklogin($email, $password);
  $tes = count($cek);
  if($tes>0){
    $data_login = $this->mymodel->ceklogin($email, $password);
    $level = $data_login->level;
    $data = array('level' => $level);
    $this->session->set_userdata($data);

    if($level == 'sekretaris1') {
<<<<<<< HEAD
      redirect('dashboard');
  	}elseif ($level == 'admintk') {
    	redirect('admintk');
  	}elseif ($level == 'adminsd') {
    	redirect('adminsd');
  	}elseif ($level == 'adminsmp') {
    	redirect('adminsmp');
  	}elseif ($level == 'admindirektur') {
    	redirect('admindirektur');
  	}else{
			redirect('login');
=======
      redirect('dashboard/dashboard');
  }elseif ($level == 'admintk') {
    	redirect('admin/admintk');
  }elseif ($level == 'adminsd') {
    redirect('admin/adminsd');
  }elseif ($level == 'adminsmp') {
    redirect('admin/adminsmp');
  }elseif ($level == 'admindirektur') {
    redirect('admin/admindirektur');
  }else{
		echo "Gagal Login";
>>>>>>> 8f7d39eb69b20345b64a7f2e19f4e1ae7c113256
	}
    }
  }

 function logout(){
    $this->session->sess_destroy();
    redirect('login');
  }
}
