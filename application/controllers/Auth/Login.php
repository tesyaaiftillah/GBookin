<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Auth');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() == FALSE)
        {
			$data['title'] = 'GBookin - Sign In';
			$this->load->view('template/__headAuth',$data);
			$this->load->view('auth/login');
        }
        else
        {
            $this->_login();
        }
	}

	function _login()
	{
		$email = $this->input->post('email');
        $password = $this->input->post('password');

		$user = $this->db->get_where('users', ['email' => $email])->row_array();

		if ($user) 
		{
			if(password_verify($password, $user['password']))
			{
				$data = array(
					'email' => $user['email'],
					'role_id' => $user['role_id'],
				);
				$this->session->set_userdata($data);
				if($user['role_id'] == 1)
				{
					redirect('Admin/Dashboard');
				}
				else
				{
					$this->session->set_flashdata('message', '<div class="flashMessage fw-bold">
					Sign in Success</div>');
					redirect('Home');
				}
			}
			else
			{                    
				$this->session->set_flashdata('message', '<div class="flashMessage fw-bold">
				Wrong Password </div>');
				redirect('Login');
			}
		}
		else
		{
			$this->session->set_flashdata('message', '<div class="flashMessage fw-bold">Your email is not registered yet</div>');
            redirect('Login');
		}
	}
}