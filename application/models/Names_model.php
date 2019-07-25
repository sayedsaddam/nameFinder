<?php defined('BASEPATH') OR exit('No direct script access allowed!'); ?>
<?php
class Names_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	// Get data from database.
	public function get_names(){
		$this->db->select('id, first_name, last_name, name_description, category');
		$this->db->from('names_list');
		$this->db->limit(10);
		return $this->db->get()->result();
	}
}



?>