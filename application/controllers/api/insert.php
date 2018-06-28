<?php
// use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class insert extends REST_Controller{
  function __construct()
  {
	  parent::__construct();
	  $this->load->model('androidmodel');
  }
  function index_post(){
  	$api=$this->post('api');
  	if ($api=="datasiswa") {
  	$namalengkap = $_POST["nl"];
  	$namapanggilan = $_POST["np"];
  	$tanggallahir = $_POST["tl"];
  	$usia=$_POST["usia"];
  	$jeniskelamin=$_POST["jk"];
    $agama=$_POST["agama"];
    $kwn=$_POST["kewarga"];
    $tinggalbersama=$_POST["tglbr"];
    $anakke=$_POST["ake"];
    $iduser = $_POST["id_user"];
  	$where = array("nama_siswa"=>$namalengkap, "tanggal_lahir_siswa"=>$tanggallahir);
  	$data = array('id_siswa'=>"",
  		'nama_siswa' =>$namalengkap ,
  	'nama_panggilan'=>$namapanggilan,
  	'tanggal_lahir_siswa'=>$tanggallahir,
  	'usia_siswa'=>$usia,
  	'tinggal_bersama_siswa'=>$tinggalbersama,
    'anak_ke_siswa'=>$anakke,
    'id_jenis_kelamin'=>$jeniskelamin,
    'id_agama'=>$agama,
    'id_warganegara'=>$kwn,
    'id_status_diterima'=>"3",
    'id_user'=>$iduser);
  	$cek_fase_1 = $this->androidmodel->selectwhere('siswa',$where)->num_rows();
    	$cek_fase_2=$this->androidmodel->selectwhere('siswa',$where)->row();
  	if ($cek_fase_1 > 0) {
      $data_session=array(
        'id_siswa'=>$cek_fase_2->id_siswa);
  		$message=array('succes'=>2, "data_siswa"=>$data_session);
		$this->response($message, 200);
  	}else{
  		$this->androidmodel->insert('siswa',$data);
  		$message=array('succes'=>1);
		$this->response($message, 200);
  	}
  }else if ($api=="riwayat_sklh") {
  $nmsekolah = $_POST["nm_sekolah"];
  $thn_masuk = $_POST["thn_masuk"];
  $thn_tamat = $_POST["thn_tamat"];
  $almt_sekolah=$_POST["almt_sekolah"];
  $ksulitan =$_POST["ksulitan"];
  $aktifitas=$_POST["aktifitas"];
  $iduser = $_POST["id_user"];
  $data = array('id_siswa'=>"",
    'nama_siswa' =>$namalengkap ,
  'nama_panggilan'=>$namapanggilan,
  'tanggal_lahir_siswa'=>$tanggallahir,
  'usia_siswa'=>$usia,
  'tinggal_bersama_siswa'=>$tinggalbersama,
  'anak_ke_siswa'=>$anakke,
  'id_jenis_kelamin'=>$jeniskelamin,
  'id_agama'=>$agama,
  'id_warganegara'=>$kwn,
  'id_status_diterima'=>"3",
  'id_user'=>$iduser);

  $cek_fase_1 = $this->androidmodel->selectwhere('siswa',$where)->num_rows();
  if ($cek_fase_1 > 0) {
    $message=array('succes'=>2);
  $this->response($message, 200);
  }else{
    $this->androidmodel->insert('siswa',$data);
    $message=array('succes'=>1);
  $this->response($message, 200);
  }
}else if ($api=="riwayat_sklh") {
$nmsekolah = $_POST["nm_sekolah"];
$thn_masuk = $_POST["thn_masuk"];
$thn_tamat = $_POST["thn_tamat"];
$almt_sekolah=$_POST["almt_sekolah"];
$ksulitan =$_POST["ksulitan"];
$aktifitas=$_POST["aktifitas"];
$iduser = $_POST["id_user"];
$data = array('id_siswa'=>"",
  'nama_siswa' =>$namalengkap ,
'nama_panggilan'=>$namapanggilan,
'tanggal_lahir_siswa'=>$tanggallahir,
'usia_siswa'=>$usia,
'tinggal_bersama_siswa'=>$tinggalbersama,
'anak_ke_siswa'=>$anakke,
'id_jenis_kelamin'=>$jeniskelamin,
'id_agama'=>$agama,
'id_warganegara'=>$kwn,
// 'id_status_diterima'=>"",
'id_user'=>$iduser);

$cek_fase_1 = $this->androidmodel->selectwhere('siswa',$where)->num_rows();
if ($cek_fase_1 > 0) {
  $message=array('succes'=>2);
$this->response($message, 200);
}else{
  $this->androidmodel->insert('siswa',$data);
  $message=array('succes'=>1);
$this->response($message, 200);
}
}
}
}
?>
