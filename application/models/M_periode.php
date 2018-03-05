<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class M_periode extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function show_periode()
	{
		$sql = "SELECT
					*
				FROM
					C_PERIODE
				WHERE
					AKTIF = 'Y'
				ORDER BY
					KODE_PERIODE";

		return $this->db->query($sql)->result_array();
	}

	public function cek_periode($kode)
	{
		$sql = "SELECT
					*
				FROM
					C_PERIODE
				WHERE
					KODE_PERIODE = '{$kode}'";

		return $this->db->query($sql);

	}

}