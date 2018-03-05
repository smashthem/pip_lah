<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Pengumuman extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->template->load('app','pengumuman/index');
	}
}