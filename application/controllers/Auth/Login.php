<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
        $data['title'] = 'GBookIn - Login';
		$this->load->view('auth/login', $data);
	}
}