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
