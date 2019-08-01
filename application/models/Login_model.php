<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	// User signup
	public function create_account($data){
		$this->db->insert('users', $data);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	// User signin
	public function sign_in($username, $password){
		$this->db->select('user_id, username, password, fullname');
		$this->db->from('users');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get()->row_array();
	}
}


?>