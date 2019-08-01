<?php defined('BASEPATH') OR exit('No direct script access allowed !');
class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
	}
	public function index(){
		$data['title'] = "Login | Name Finder";
		$data['body'] = 'admin/user_login';
		$this->load->view('components/template', $data);
	}
	public function sign_up(){
		$data['title'] = "Signup | Name Finder";
		$data['body'] = 'admin/user_signup';
		$this->load->view('components/template', $data);
	}
	// Create new account
	public function signup(){
		$this->form_validation->set_rules('fullname', 'Full Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'required|max_length[15]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('birthday', 'Birthday', 'required');
		if($this->form_validation->run() == TRUE){
			$data = array(
				'fullname' => $this->input->post('fullname'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => sha1($this->input->post('password')),
				'birth_day' => date('Y-m-d', strtotime($this->input->post('birthday'))),
				'created_at' => $this->input->post('created_at')
			);
			$this->Login_model->create_account($data);
			$this->session->set_flashdata('success', '<strong>Woohoo !</strong> Your account has been created successfully, now you can login !');
			redirect($_SERVER['HTTP_REFERRER']);
		}else{
			$this->sign_up();
		}
	}
	// User login
	public function sign_in(){
		$username = $this->input->post('username');
		$password = sha1($this->input->post('password'));
		$user_signin = $this->Login_model->sign_in($username, $password);
		if($user_signin == TRUE ){
			$this->session->set_userdata(array('username' => $username));
			redirect('name_finder');
		}else{
			$this->session->set_flashdata('login_error', '<strong>Aww snap! </strong>Username / Password maybe incorrect, try again with correct one.');
			$this->index();
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}

?>