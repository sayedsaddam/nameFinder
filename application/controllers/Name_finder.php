<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); 
class Name_finder extends CI_Controller{
	function construct(){
		parent::__construct();
	}
	public function index(){
		$data['title'] = 'Home | Name Finder';
		$data['body'] = 'admin/name_finder';
		$this->load->view('components/template', $data);
	}
}


?>
