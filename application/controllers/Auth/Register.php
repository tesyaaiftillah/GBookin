<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth');
     }

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');

		if ($this->form_validation->run() === false)
        {
            $data['title'] = 'GBookin - Register Account';
            $this->load->view('template/__headAuth', $data);
            $this->load->view('auth/register');
        }
        else
        {
            $currentTime = date('Y-m-d H:i:s');
            $data = 
            [
                'username' => htmlspecialchars ($this->input->post('username', true)),
                'email' => htmlspecialchars ($this->input->post('email', true)),
                'password' => password_hash ($this->input->post('password'), PASSWORD_DEFAULT),
                'created_at'=>$currentTime,
            ]; 
            $this->Auth->RegisterData($data);
            $this->session->set_flashdata('message', '<div class="flashMessage fw-bold">
            Account Created! please Login</div>');
            redirect('Login');
        }
	}

}