<?php if(!defined('BASEPATH')) exit('No direct script acess allowed');

class M_register extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function master_asal_diklat()
	{
		$sql = "SELECT
					ID,KODEDIKLAT,
					ID||'.'||KODEDIKLAT AS KODE,
					URAI||' ( '||SINGKAT||' ) ' AS URAI
				FROM
					M_ASAL_DIKLAT
				ORDER BY
					ID,KODEDIKLAT";

		return $this->db->query($sql)->result_array();
	}

	public function master_jurusan()
	{
		$sql = "SELECT KODE,JURUSAN FROM M_JURUSAN ORDER BY KODE";

		return $this->db->query($sql)->result_array();
	}

	public function master_jurusan_tingkat($kode)
	{
		list($kode_jurusan,$nama_jurusan) = explode('.', $kode);

		$sql = "SELECT
					KODE,KODE_JURUSAN,JURUSAN,TINGKAT,KETERANGAN,
					KODE||'.'||KODE_JURUSAN AS KODETINGKAT,
					TINGKAT
				FROM
					M_JURUSAN_TINGKAT
				WHERE
					KODE_JURUSAN = '{$kode_jurusan}'";

		return $this->db->query($sql)->result_array();
	}

	public function daftar($data)
	{
		return $this->db->insert('TM_PESERTA', $data);
	}

}