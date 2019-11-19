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
	// Get all names to list on a separate page.
	public function get_all_names(){
		$this->db->select('*');
		$this->db->from('names_list');
		return $this->db->get()->result();
	}
	// Edit names.
	public function edit_name($id){
		$this->db->select('id, first_name, last_name, name_description, category');
		$this->db->from('names_list');
		$this->db->where('id', $id);
		return $this->db->get()->row_array();
	}
	// Delete names.
	public function delete_names($id){
		$this->db->where('id', $id);
		$this->db->delete('names_list');
	}
	// Add new names to the database.
	public function save_names($data){
		return $this->db->insert('names_list', $data);
		if($this->db->affected_rows() > 0)
			return TRUE;
		return FALSE;
	}
	// View single name.
	public function name_detail($id){
		$this->db->select('id, first_name, last_name, name_description, category');
		$this->db->from('names_list');
		$this->db->where('id', $id);
		return $this->db->get()->row();
	}
	// Search for names.
	public function search_names($name){
		$this->db->select('id, first_name, last_name, name_description, category');
		$this->db->from('names_list');
		$this->db->like('first_name', $name);
		$this->db->or_like('last_name', $name);
		$this->db->or_like('name_description', $name);
		$this->db->or_like('category', $name);
		return $this->db->get()->result();
	}
	// Get names for CSV.
	public function get_for_csv(){
		$this->db->select('*');
		$this->db->from('names_list');
		return $this->db->get()->result_array();
	}
}



?>