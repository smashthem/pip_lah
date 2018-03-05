<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_periode');
		$this->load->model('m_register');
	}
	
	public function index()
	{
		if (get_sesi('periode') == true) {
			
			$data['status'] = 'success';

		}else{

			$data['status'] = 'danger';

		}

		$data['diklat']		= $this->m_register->master_asal_diklat();

		$data['jurusan']	= $this->m_register->master_jurusan();

		$data['periode'] 	= $this->m_periode->show_periode();

		$this->template->load('app','register/index', $data);
	}

	public function tingkat()
	{
		$kode_jurusan = trim($this->input->post('jurusan'));

		$data['tingkat']	= $this->m_register->master_jurusan_tingkat($kode_jurusan);

		$this->load->view('register/master_jurusan_tingkat', $data);

	}

	public function periode()
	{

		$periode = trim($this->input->post('periode'));

		if ($periode == '0') {
			
			$this->session->sess_destroy();
			die('uwes');

		}else{

			$check_kode = $this->m_periode->cek_periode($periode);

			if (!count($check_kode)) {
				
				die('Data tidak ada!');

			}else{

				$row = $this->m_periode->cek_periode($periode)->row_array();

			}

			$array = array(

				'periode'			=> true,
				'kode_periode'		=> $row['KODE_PERIODE'],
				'nama_periode'		=> $row['URAI'],
				'aktif'				=> $row['AKTIF'],
				'tanggal_mulai'		=> $row['TANGGAL_MULAI'],
				'tanggal_selesai'	=> $row['TANGGAL_SELESAI'],
				'max_peserta'		=> $row['MAX_PESERTA']

			);

			$this->session->set_userdata($array);

			die('uwes');

		}
	}

	public function daftar()
	{
		
		$tmp_foto = $_FILES['foto']['tmp_name'];
		$nama_foto = $_FILES['foto']['name'];
		$extension = array('jpg','jpeg','png','pneg');
		$ext = pathinfo($nama_foto);

		if (is_uploaded_file($tmp_foto)) {
			
			if (in_array($ext['extension'], $extension) === true) {
				
				$path = './tymck/';
				$nama = 'IMG_'.date('Ymd').'.'.$ext['extension'];

				move_uploaded_file($tmp_foto, $path.$nama);

				list($kode_diklat,$nama_diklat) = explode('.', $this->input->post('asaldiklat'));
				list($kode_jurusan,$nama_jurusan) = explode('.', $this->input->post('jurusan'));
				list($kode_tingkat,$kode_jur,$nama_tingkat) = explode('.', $this->input->post('tingkat'));
				list($sign_on,$sign_off) = explode(' - ', $this->input->post('sign-on'));

				$data = array(

					'NOMOR_REGISTRASI'	=> $this->input->post('nomor'),
					'KODE_PERIODE'		=> get_sesi('kode_periode'),
					'NAMA'				=> $this->input->post('nama_lengkap'),
					'ALAMAT'			=> $this->input->post('alamat'),
					'JENKEL'			=> $this->input->post('kelamin'),
					'TEMPAT_LAHIR'		=> $this->input->post('tempat_lahir'),
					'TANGGAL_LAHIR'		=> walik_tanggal($this->input->post('tgl_lahir')),
					'PEKERJAAN'			=> $this->input->post('pekerjaan'),
					'TANGGAL_DAFTAR'	=> date('Y-m-d'),
					'TANGGAL_UJIAN'		=> '',
					'TELP'				=> '',
					'HP'				=> $this->input->post('no_hp'),
					'PASS'				=> 'pip',
					'NOMOR_INDUK'		=> $this->input->post('nomor_induk'),
					'NOMOR_SK_BERLAYAR'	=> $this->input->post('masa'),
					'TANGGAL_SIGNON'	=> walik_tanggal_londo(trim($sign_on)),
					'TANGGAL_SIGNOFF'	=> walik_tanggal_londo(trim($sign_off)),
					'NAMA_KAPAL'		=> $this->input->post('kapal'),
					'PERUSAHAAN'		=> '',
					'SEKOLAH_ASAL'		=> $this->input->post('asal_sekolah'),
					'KEAHLIAN'			=> '',
					'IJAZAH'			=> '',
					'ID_JENIS_KAPAL'	=> '',
					'NOMOR_SKL'			=> $this->input->post('masa'),
					'FOTO'				=> $nama,
					'EMAIL'				=> $this->input->post('email'),
					'IDDIKLAT'			=> $kode_diklat,
					'ASAL_DIKLAT'		=> $nama_diklat,
					'KODEJURUSAN'		=> $kode_jurusan,
					'JURUSAN'			=> $nama_jurusan,
					'TINGKAT'			=> $nama_tingkat

				);

				var_dump($data);
				exit;

				$this->m_register->daftar($data);

				redirect('register');

			}

		}

	}
}
