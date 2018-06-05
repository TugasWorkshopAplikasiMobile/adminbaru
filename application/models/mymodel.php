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

    function selectjoin(){
        $this->db->join('riwayat_sekolah', 'siswa.ID_SISWA = riwayat_sekolah.ID_SISWA', 'left');
         $this->db->join('hasil', 'siswa.ID_SISWA = hasil.ID_SISWA', 'left');
        // $this->db->where($this->id, $id);
        return $this->db->get("siswa");
    }

    function ceklogin($username, $password){
      $this->db->where('username_admin', $username);
      $this->db->where('password_admin', $password);
      return $this->db->get('admin')->row();
    }
}
