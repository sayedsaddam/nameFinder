<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
/*
* Filename: name_finder.php
* Filepath: controllers / name_finder.php
* Author: Saddam
*/
class Name_finder extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Names_model');
	}
	public function index(){
		$data['title'] = 'Home | Name Finder';
		$data['body'] = 'admin/name_finder';
		$data['names'] = $this->Names_model->get_names();
		$this->load->view('components/template', $data);
	}
	// Get all names.
	public function list_names(){
		$data['title'] = 'List Names | Name Finder';
		$data['body'] = 'admin/list_names';
		$data['names'] = $this->Names_model->get_all_names();
		$this->load->view('components/template', $data);
	}
	// Delete names.
	public function delete_name(){
		if($this->Names_model->delete_names($id)){
			$this->session->set_flashdata('deleted', 'Name has been deleted successfully!');
			redirec('name_finder/list_names');
		}else{
			echo "Failed to delete name";
		}
	}
	// Add new names to the list. -- Load the form.
	public function add_names(){
		if(!$this->session->userdata('username')){
			redirect('login');
		}
		$data['title'] = 'Add Names | Names Finder';
		$data['body'] = 'admin/add_names';
		$this->load->view('components/template', $data);
	}
	// Store names to the database.
	public function store_names(){
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');
		if($this->form_validation->run() == TRUE){
			$data = array(
				'first_name' => $this->input->post('fname'),
				'last_name' => $this->input->post('lname'),
				'name_description' => $this->input->post('description'),
				'category' => $this->input->post('category'),
				'created_at' => date('Y-m-d')
			);
			$this->Names_model->save_names($data);
			$this->session->set_flashdata('success', '<strong>Woohoo !</strong> Data has been saved successfully.');
			redirect('name_finder');
		}else{
			$this->add_names();
		}
	}
	// Sitemap.
	public function sitemap(){
		$data['title'] = 'Sitemap | Name Finder';
		$data['body'] = 'admin/sitemap';
		$this->load->view('components/template', $data);
	}
	// Retrieving data from database and display it in the CI Datatables library.
	public function get_data(){
		$this->load->library('Datatables');
		$dt_authors = $this->datatables->init();
		$dt_authors->select('*')->from('names_list');
		$dt_authors
		    ->style(array(
			'class' => 'table table-striped table-bordered',
		    ))
		    ->column('ID', 'id')
		    ->column('First Name', 'first_name')
		    ->column('Last Name', 'last_name')
		    ->column('Name Description', 'name_description')
		    ->column('Category', 'category');
		$this->datatables->create('dt_authors', $dt_authors); 
		$data['title'] = 'Home | Name Finder';
		$data['body'] = 'admin/list_names';
		$this->load->view('components/template', $data);
	}
}


?>
