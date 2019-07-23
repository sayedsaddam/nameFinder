<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('user');
		$users = User::all();
		// $users = User::where('id', '>', 1)->get();

		$this->load->view('index', array('users' => $users));
	}
}