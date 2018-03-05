<?php

if (!function_exists('config')) {

	function config($key)
	{
		$ci = get_instance();
		$ci->load->config('app');
		return $ci->config->item($key);
	}

}

if (!function_exists('walik_tanggal')) {
	
	function walik_tanggal($str)
	{

		list($tanggal,$bulan,$tahun) = explode('/', $str);

		return $tahun.'-'.$bulan.'-'.$tanggal;

	}

}

if (!function_exists('walik_tanggal_londo')) {
	
	function walik_tanggal_londo($str)
	{

		list($bulan,$tanggal,$tahun) = explode('/', $str);

		return $tahun.'-'.$bulan.'-'.$tanggal;

	}

}

if (!function_exists('get_sesi')) {
	
	function get_sesi($sesi)
	{
		$ci = get_instance();
		return $ci->session->userdata($sesi);
	}

}

if (!function_exists('address')) {

	function address($uri)
	{
		$data = '';

		if (isset($uri)) {
			
			if ($uri == null) {
				
				$data .= ucfirst('Home');

			}else{

				$data .= ucfirst($uri);

			}

		}

		return $data;
	}

}
