<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mymodel extends CI_Model {

 	function __construct(){
        parent::__construct();
    }

	public function select($table){
		return $this->db->get($table);
	}

	public function selectwhere($table,$data){
		return $this->db->get_where($table, $data);
	}

	function delete($table,$data){
		$this->db->delete($table, $data);
	}

	function update($table,$data,$where){
		$this->db->update($table,$data,$where);
	}

	function insert($table,$data){
		$this->db->insert($table,$data);
	}

  function selectjoin($clause){
        // $this->db->join('riwayat_sekolah', 'siswa.riwayat_sekolah_ID_RIWAYATSEKOLAH = riwayat_sekolah.ID_RIWAYATSEKOLAH', 'left');
        //  $this->db->join('hasil', 'siswa.hasil_ID_HASIL = hasil.ID_HASIL', 'left');
        //  $this->db->join('user', 'user.siswa_ID_SISWA = siswa.ID_SISWA', 'left');
        //  $this->db->join('jenjang', 'jenjang.ID_JENJANG = user.jenjang_ID_JENJANG', 'left');
        $this->db->where($clause);
        return $this->db->get("siswa");
    }

    // cek login di login form
  function ceklogin($username, $password){
      $this->db->where('username_admin', $username);
      $this->db->where('password_admin', $password);
      return $this->db->get('admin')->row();
    }
    // end of cek login di login form

  function selectsiswafornilai(){
        $this->db->join('nilai_test', 'nilai_test.ID_NILAI_TEST = siswa.nilai_test_ID_NILAI_TEST', 'left');
        // $this->db->where('ID_SISWA', $id);
        return $this->db->get("siswa");
      }

  function selectsiswafornilaiupdate($id){
        $this->db->join('nilai_test', 'nilai_test.ID_NILAI_TEST = siswa.nilai_test_ID_NILAI_TEST', 'left');
        $this->db->where('ID_SISWA', $id);
        return $this->db->get("siswa");
      }

  function selectsiswafornilaitk(){
        $this->db->join('siswa', 'nilai_psikotest.ID_NILAI_PSIKOTEST = siswa.nilai_psikotest_ID_NILAI_PSIKOTEST', 'left');
        // $this->db->where($this->id, $id);
        return $this->db->get("nilai_psikotest");
    }

  function detailsiswa($id){
    	  $this->db->join('kesehatan_anak', 'siswa.kesehatan_anak_ID_KESEHATAN_ANAK = kesehatan_anak.ID_KESEHATAN_ANAK', 'left');
        $this->db->join('saudara_kandung_anak', 'siswa.saudara_kandung_anak_ID_SAUDARA_KANDUNG = saudara_kandung_anak.ID_SAUDARA_KANDUNG', 'left');
        $this->db->join('riwayat_sekolah', 'siswa.riwayat_sekolah_ID_RIWAYATSEKOLAH = riwayat_sekolah.ID_RIWAYATSEKOLAH', 'left');
        $this->db->join('keluarga', 'siswa.keluarga_ID_KELUARGA = keluarga.ID_KELUARGA', 'left');
        $this->db->join('Kelahiran_anak', 'siswa.Kelahiran_anak_ID_KELAHIRAN_ANAK = Kelahiran_anak.ID_KELAHIRAN_ANAK', 'left');
        $this->db->join('kemampuan_anak', 'siswa.kemampuan_anak_ID_KEMAMPUAN_ANAK = kemampuan_anak.ID_KEMAMPUAN_ANAK', 'left');
        $this->db->join('hasil', 'siswa.hasil_ID_HASIL = hasil.ID_HASIL', 'left');
        $this->db->join('data_tempat_tinggal', 'siswa.data_tempat_tinggal_ID_DATA_TEMPAT_TINGGAL = data_tempat_tinggal.ID_DATA_TEMPAT_TINGGAL', 'left');
        $this->db->join('kondisi_keluarga', 'siswa.kondisi_keluarga_ID_KONDISI_KELUARGA = kondisi_keluarga.ID_KONDISI_KELUARGA', 'left');
        $this->db->join('ciri_khas_anak', 'siswa.ciri_khas_anak_ID_CIRIKHAS_ANAK = ciri_khas_anak.ID_CIRIKHAS_ANAK', 'left');
        $this->db->where("siswa.ID_SISWA",$id);
        $this->db->from('siswa');
        return $this->db->get();
    }

  function detailnilai($id){
        $this->db->join('siswa', 'nilai_test.siswa_ID_SISWA = siswa.ID_SISWA', 'left');
        $this->db->join('hasil', 'siswa.hasil_ID_HASIL = hasil.ID_HASIL', 'left');
        $this->db->join('siswa', 'nilai_psikotest.ID_NILAI_PSIKOTEST = siswa.nilai_psikotest_ID_NILAI_PSIKOTEST', 'left');
        $this->db->where("siswa.ID_SISWA",$id);
        return $this->db->get("siswa");
      }

  function verifikasi_semua_jenjang(){
        $this->db->join('jenjang', 'jenjang.ID_JENJANG = user.jenjang_ID_JENJANG', 'left');
        $data = $this->db->get('user');
        return $data->result();
      }

      function edit_verifikasi_semua_jenjang($no_id, $table){
          // $this->db->join('pembayaran', 'pembayaran.ID_PEMBAYARAN = user.') belum kelarrrrrr
        //gw ga tau kudu gmn juga yg ini om btw view apa aja yak ?? yg blm yg verivikasi udh blm ?
          $return = $this->db->get_where($table, $no_id);
          return $return->result();
      }

// tampilan petugas admin sekretaris
      function petugas1(){
        $this->db->select('admin.*, admin_level.*, jenis_kelamin.*');
        $this->db->join('admin_level', 'admin.id_level = admin_level.id_level');
        $this->db->join('jenis_kelamin', 'admin.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin');
        $this->db->from('admin');
        $data = $this->db->get();
        return $data;
      }
// end of tampilan petugas admin sekretaris

// tampilan data siswa tk admin sekretaris
      function siswatk1(){
        $this->db->select('siswa.*, user.*, jenis_kelamin.*, agama.*, kewarganegaraan.*, status_diterima.*');
        $this->db->join('user', 'siswa.id_user = user.id_user');
        $this->db->join('jenis_kelamin', 'siswa.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin');
        $this->db->join('agama', 'siswa.id_agama = agama.id_agama');
        $this->db->join('kewarganegaraan', 'siswa.id_warganegara = kewarganegaraan.id_kewarganegaraan');
        $this->db->join('status_diterima', 'siswa.id_status_diterima = status_diterima.id_status_diterima');
        $this->db->from('siswa');
        $this->db->where("user.id_jenjang",'1');
        $data=$this->db->get();
        return $data;
      }
// end of tampilan data siswa tk admin sekretaris


}
