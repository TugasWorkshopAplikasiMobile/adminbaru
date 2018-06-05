<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mymodel extends CI_Model {

 	function __construct()
    {
        parent::__construct();
    }

	public function select($table)
	{
		return $this->db->get($table);
	}

	public function selectwhere($table,$data)
	{
		return $this->db->get_where($table, $data);
	}

	function delete($table,$data)
	{
		$this->db->delete($table, $data);
	}

	function update($table,$data,$key)
	{
		$this->db->update($table,$data,$key);
	}

	function insert($table,$data)
	{
		$this->db->insert($table,$data);
	}

    function selectjoin($clause){
        $this->db->join('riwayat_sekolah', 'siswa.riwayat_sekolah_ID_RIWAYATSEKOLAH = riwayat_sekolah.ID_RIWAYATSEKOLAH', 'left');
         $this->db->join('hasil', 'siswa.hasil_ID_HASIL = hasil.ID_HASIL', 'left');
         $this->db->join('user', 'user.siswa_ID_SISWA = siswa.ID_SISWA', 'left');
         $this->db->join('jenjang', 'jenjang.ID_JENJANG = user.jenjang_ID_JENJANG', 'left');
        $this->db->where($clause);
        return $this->db->get("siswa");
    }

    function ceklogin($username, $password){
      $this->db->where('username_admin', $username);
      $this->db->where('password_admin', $password);
      return $this->db->get('admin')->row();
    }

     function selectsiswafornilai(){
        $this->db->join('siswa', 'nilai_test.siswa_ID_SISWA = siswa.ID_SISWA', 'left');
        // $this->db->where($this->id, $id);
        return $this->db->get("nilai_test");
    }
    function selectsiswafornilaitk(){
        $this->db->join('siswa', 'nilai_psikotest.ID_NILAI_PSIKOTEST = siswa.nilai_psikotest_ID_NILAI_PSIKOTEST', 'left');
        // $this->db->where($this->id, $id);
        return $this->db->get("nilai_psikotest");
    }
}
