<?php
class M_login extends CI_Model {

	function proseslogin($email, $pass){
		$this->db->where('email',$email);
		$this->db->where('password',$pass);
		return $this->db->get('admin')->row();
	}
}