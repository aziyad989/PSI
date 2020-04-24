<?php
class Login_model extends CI_Model{
	//cek nip dan password admin
	function auth_admin($username,$password){
		$this->db->select('username, password');
		$query = $this->db->get('personil');
		return $query;
	}
	//cek nim dan password pelanggan
	function auth_nadzir($username,$password){
		$this->db->select('username, password');
		$query = $this->db->get('personil');
		return $query;
	}

}
