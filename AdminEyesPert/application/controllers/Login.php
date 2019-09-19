<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$data["title"] = "Masuk Admin EyesPert";
		$this->load->view('login', $data);
	}

	public function ceklogin()
	{
		if (isset($_POST['login'])) {
			$email = $this->input->post('email', true);
			$pass = $this->input->post('pass', true);
			$cek = $this->m_login->proseslogin($email, $pass);
			$hasil = count($cek);
			
			if ($hasil > 0) {
				$yglogin = $this->db->get_where('admin', array('email' => $email, 'password' => $pass))->row();
				$data = array(
					'udhmasuk' => true,
					'nama' => $yglogin->nama
				);
				$this->session->set_userdata($data);
				// var_dump($yglogin->akses);
				// die();
				if ($yglogin->akses == 'admin') {
					redirect('admin');
				} else {
					redirect('login/index');
				}
			} else {
				$this->session->set_flashdata('info', 'Email/Password Anda Salah!');
				redirect('login/index');
			}
		}
	}

	function keluar()
	{
		$this->session->sess_destroy();
		redirect('login/index');
	}
}
