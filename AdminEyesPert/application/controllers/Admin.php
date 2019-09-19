<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	var $template = 'template';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
	}

	//Halaman Beranda
	public function index()
	{
		$data["title"] = "Beranda - Admin EyesPert";
		$data["gejala"] = $this->M_admin->jumlah_gejala();
		$data["penyakit"] = $this->M_admin->jumlah_penyakit();
		$data["pengetahuan"] = $this->M_admin->jumlah_pengetahuan();
		$data["tentang"] = $this->M_admin->jumlah_tentang();
		$data['content'] = 'admin';
		if (isset($_SESSION['udhmasuk'])) {
			$this->load->view($this->template, $data);
		} else {
			redirect('login/index');
		}
	}



	//Halaman Tabel Gejala
	public function gejala()
	{
		$data["title"] = "Gejala - Admin EyesPert";
		$data["gejala"] = $this->M_admin->gejala();
		$data['content'] = 'gejala';
		if (isset($_SESSION['udhmasuk'])) {
			$this->load->view($this->template, $data);
		} else {
			redirect('login/index');
		}
	}

	public function tambah_gejala()
	{
		$data["title"] = "Gejala - Admin EyesPert";
		$data["h1"] = "Tambah Gejala";
		$data["h6"] = "Tambah Data";
		$data['content'] = 'form/tambah_gejala';
		if (isset($_SESSION['udhmasuk'])) {
			$this->load->view($this->template, $data);
		} else {
			redirect('c_login/index');
		}
	}

	public function ubah_gejala($id)
	{
		$data["title"] = "Gejala - Admin EyesPert";
		$data["h1"] = "Ubah Gejala";
		$data["h6"] = "Ubah Data";
		$data['gejala'] = $this->M_admin->ubah_gejala($id);
		$data['content'] = 'form/ubah_gejala';
		if (isset($_SESSION['udhmasuk'])) {
			$this->load->view($this->template, $data);
		} else {
			redirect('login/index');
		}
	}

	public function simpan_gejala()
	{
		$id = $this->input->post('id_gejala');
		$kode_gejala = $this->input->post('kode_gejala');
		$nama_gejala = $this->input->post('nama_gejala');
		$belief = $this->input->post('belief');
		$data = array(
			'id_gejala' => $id,
			'kode_gejala' => $kode_gejala,
			'nama_gejala' => $nama_gejala,
			'belief' => $belief,
		);
		$this->M_admin->simpan_gejala($data);
		redirect('Admin/gejala');
	}

	public function simpanubah_gejala()
	{
		$id = $this->input->post('id_gejala');
		$kode_gejala = $this->input->post('kode_gejala');
		$nama_gejala = $this->input->post('nama_gejala');
		$belief = $this->input->post('belief');
		$data = array(
			'id_gejala' => $id,
			'kode_gejala' => $kode_gejala,
			'nama_gejala' => $nama_gejala,
			'belief' => $belief,
		);
		$this->M_admin->simpanubah_gejala($id, $data);
		redirect('Admin/gejala');
	}

	public function hapus_gejala($id)
	{
		$this->M_admin->hapus_gejala($id);
		redirect('Admin/gejala');
	}



	//Halaman Tabel Penyakit
	public function penyakit()
	{
		$data["title"] = "Penyakit - Admin EyesPert";
		$data["penyakit"] = $this->M_admin->penyakit();
		$data['content'] = 'penyakit';
		if (isset($_SESSION['udhmasuk'])) {
			$this->load->view($this->template, $data);
		} else {
			redirect('login/index');
		}
	}

	public function tambah_penyakit()
	{
		$data["title"] = "Penyakit - Admin EyesPert";
		$data["h1"] = "Tambah Penyakit";
		$data["h6"] = "Tambah Data";
		$data['content'] = 'form/tambah_penyakit';
		if (isset($_SESSION['udhmasuk'])) {
			$this->load->view($this->template, $data);
		} else {
			redirect('c_login/index');
		}
	}

	public function ubah_penyakit($id)
	{
		$data["title"] = "Penyakit - Admin EyesPert";
		$data["h1"] = "Ubah Penyakit";
		$data["h6"] = "Ubah Data";
		$data['penyakit'] = $this->M_admin->ubah_penyakit($id);
		$data['content'] = 'form/ubah_penyakit';
		if (isset($_SESSION['udhmasuk'])) {
			$this->load->view($this->template, $data);
		} else {
			redirect('login/index');
		}
	}

	public function simpan_penyakit()
	{
		$id = $this->input->post('id_gangguan');
		$kode_gangguan = $this->input->post('kode_gangguan');
		$nama_gangguan = $this->input->post('nama_gangguan');
		$penanganan = $this->input->post('penanganan');
		$pengertian = $this->input->post('pengertian');
		$tips = $this->input->post('tips');
		$gambar = $this->input->post('gambar');
		$data = array(
			'id_gangguan' => $id,
			'kode_gangguan' => $kode_gangguan,
			'nama_gangguan' => $nama_gangguan,
			'penanganan' => $penanganan,
			'pengertian' => $pengertian,
			'tips' => $tips,
			'gambar' => $gambar,
		);
		$this->M_admin->simpan_penyakit($data);
		redirect('Admin/penyakit');
	}

	public function simpanubah_penyakit()
	{
		$id = $this->input->post('id_gangguan');
		$kode_gangguan = $this->input->post('kode_gangguan');
		$nama_gangguan = $this->input->post('nama_gangguan');
		$penanganan = $this->input->post('penanganan');
		$pengertian = $this->input->post('pengertian');
		$tips = $this->input->post('tips');
		$gambar = $this->input->post('gambar');
		$data = array(
			'id_gangguan' => $id,
			'kode_gangguan' => $kode_gangguan,
			'nama_gangguan' => $nama_gangguan,
			'penanganan' => $penanganan,
			'pengertian' => $pengertian,
			'tips' => $tips,
			'gambar' => $gambar,
		);
		$this->M_admin->simpanubah_penyakit($id, $data);
		redirect('Admin/penyakit');
	}

	public function hapus_penyakit($id)
	{
		$this->M_admin->hapus_penyakit($id);
		redirect('Admin/penyakit');
	}


	//Halaman Tabel Pengetahuan
	public function pengetahuan()
	{
		$data["title"] = "Pengetahuan - Admin EyesPert";
		$data["pengetahuan"] = $this->M_admin->pengetahuan();
		$data['content'] = 'pengetahuan';
		if (isset($_SESSION['udhmasuk'])) {
			$this->load->view($this->template, $data);
		} else {
			redirect('login/index');
		}
	}

	public function tambah_pengetahuan()
	{
		$data["title"] = "Pengetahuan - Admin EyesPert";
		$data["h1"] = "Tambah Pengetahuan";
		$data["h6"] = "Tambah Data";
		$data["gejala"] = $this->M_admin->gejala();
		$data["penyakit"] = $this->M_admin->penyakit();
		$data['content'] = 'form/tambah_pengetahuan';
		if (isset($_SESSION['udhmasuk'])) {
			$this->load->view($this->template, $data);
		} else {
			redirect('c_login/index');
		}
	}

	public function ubah_pengetahuan($id)
	{
		$data["title"] = "Pengetahuan - Admin EyesPert";
		$data["h1"] = "Ubah Pengetahuan";
		$data["h6"] = "Ubah Data";
		$data['pengetahuan'] = $this->M_admin->ubah_pengetahuan($id);
		$data['content'] = 'form/ubah_pengetahuan';
		if (isset($_SESSION['udhmasuk'])) {
			$this->load->view($this->template, $data);
		} else {
			redirect('login/index');
		}
	}

	public function simpan_pengetahuan()
	{
		$id = $this->input->post('id');
		$kode_gangguan = $this->input->post('kode_gangguan');
		$kode_gejala = $this->input->post('kode_gejala');
		$data = array(
			'id' => $id,
			'kode_gangguan' => $kode_gangguan,
			'kode_gejala' => $kode_gejala,
		);
		$this->M_admin->simpan_pengetahuan($data);
		redirect('Admin/pengetahuan');
	}

	public function simpanubah_pengetahuan()
	{
		$id = $this->input->post('id');
		$kode_gangguan = $this->input->post('kode_gangguan');
		$kode_gejala = $this->input->post('kode_gejala');
		$data = array(
			'id' => $id,
			'kode_gangguan' => $kode_gangguan,
			'kode_gejala' => $kode_gejala,
		);
		$this->M_admin->simpanubah_pengetahuan($id, $data);
		redirect('Admin/pengetahuan');
	}

	public function hapus_pengetahuan($id)
	{
		$this->M_admin->hapus_pengetahuan($id);
		redirect('Admin/pengetahuan');
	}

	//Halaman Tabel Tentang
	public function tentang()
	{
		$data["title"] = "Tim Pengembang - Admin EyesPert";
		$data["tentang"] = $this->M_admin->tentang();
		$data['content'] = 'tentang';
		if (isset($_SESSION['udhmasuk'])) {
			$this->load->view($this->template, $data);
		} else {
			redirect('login/index');
		}
	}

	public function tambah_tentang()
	{
		$data["title"] = "Tim Pengembang - Admin EyesPert";
		$data["h1"] = "Tambah Tim Pengembang";
		$data["h6"] = "Tambah Data";
		$data['content'] = 'form/tambah_tentang';
		if (isset($_SESSION['udhmasuk'])) {
			$this->load->view($this->template, $data);
		} else {
			redirect('c_login/index');
		}
	}

	public function ubah_tentang($id)
	{
		$data["title"] = "Tim Pengembang - Admin EyesPert";
		$data["h1"] = "Ubah Tim Pengembang";
		$data["h6"] = "Ubah Data";
		$data['tentang'] = $this->M_admin->ubah_tentang($id);
		$data['content'] = 'form/ubah_tentang';
		if (isset($_SESSION['udhmasuk'])) {
			$this->load->view($this->template, $data);
		} else {
			redirect('login/index');
		}
	}

	public function simpan_tentang()
	{
		$id = $this->input->post('id_tentang');
		$nama_tentang = $this->input->post('nama_tentang');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$pekerjaan = $this->input->post('pekerjaan');
		$sip_npm = $this->input->post('sip_npm');
		$tt_lahir = $this->input->post('tt_lahir');
		$alamat_rumah = $this->input->post('alamat_rumah');
		$no_telp = $this->input->post('no_telp');
		$nama_instansi = $this->input->post('nama_instansi');
		$foto = $this->input->post('foto');
		$data = array(
			'id_tentang' => $id,
			'nama_tentang' => $nama_tentang,
			'jenis_kelamin' => $jenis_kelamin,
			'pekerjaan' => $pekerjaan,
			'sip_npm' => $sip_npm,
			'tt_lahir' => $tt_lahir,
			'alamat_rumah' => $alamat_rumah,
			'no_telp' => $no_telp,
			'nama_instansi' => $nama_instansi,
			'foto' => $foto
		);
		$this->M_admin->simpan_tentang($data);
		redirect('Admin/tentang');
	}

	public function simpanubah_tentang()
	{
		$id = $this->input->post('id_tentang');
		$nama_tentang = $this->input->post('nama_tentang');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$pekerjaan = $this->input->post('pekerjaan');
		$sip_npm = $this->input->post('sip_npm');
		$tt_lahir = $this->input->post('tt_lahir');
		$alamat_rumah = $this->input->post('alamat_rumah');
		$no_telp = $this->input->post('no_telp');
		$nama_instansi = $this->input->post('nama_instansi');
		$foto = $this->input->post('foto');
		$data = array(
			'id_tentang' => $id,
			'nama_tentang' => $nama_tentang,
			'jenis_kelamin' => $jenis_kelamin,
			'pekerjaan' => $pekerjaan,
			'sip_npm' => $sip_npm,
			'tt_lahir' => $tt_lahir,
			'alamat_rumah' => $alamat_rumah,
			'no_telp' => $no_telp,
			'nama_instansi' => $nama_instansi,
			'foto' => $foto
		);
		$this->M_admin->simpanubah_tentang($id, $data);
		redirect('Admin/tentang');
	}

	public function hapus_tentang($id)
	{
		$this->M_admin->hapus_tentang($id);
		redirect('Admin/tentang');
	}
}