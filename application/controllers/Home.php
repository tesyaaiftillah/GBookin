<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth');
	}

	public function index()
	{
		$data['title'] = 'GBookIn - Buku kita semua';
		$data['user'] = $this->Auth->Session();

		if ($this->session->userdata('email')) 
		{
			$this->load->view('template/__headGlobal', $data);
			$this->load->view('template/__navbarLogin', $data);
			$this->load->view('home');
			$this->load->view('template/__footerGlobal');
		}
		else 
		{
			$this->load->view('template/__headGlobal', $data);
			$this->load->view('template/__navbarGlobal');
			$this->load->view('home');
			$this->load->view('template/__footerGlobal');
		}
	}
}