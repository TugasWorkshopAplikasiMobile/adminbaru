 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detailsiswa extends CI_Controller {

	public function index(){
    // $this->load->view('tampil/v_admintk');
    if(!$this->session->userdata('level') == 'sekretaris1'){
    	redirect('login');
    }else{
      $data= array(
  			'side'=>'tampil/side',
  			'content'=>'tampil/detailsiswa',
  			'siswa'=>$this->mymodel->selectjoin());
  		$this->load->view('tampil/main',$data);
  	}
  }
}