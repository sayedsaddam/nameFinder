<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('user');
		$users = User::all();
		// $users = User::where('id', '>', 1)->get();

		$this->load->view('index', array('users' => $users));
	}
	// About the website.
	public function about_us(){
		$data['title'] = 'About Us | Name Finder';
		$data['body'] = 'admin/about_us';
		$this->load->view('components/template', $data);
	}
}