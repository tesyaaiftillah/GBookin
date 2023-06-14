<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'GBookIn - Buku kita semua';
		$this->load->view('template/__headGlobal', $data);
		$this->load->view('template/__navbarGlobal');
		$this->load->view('home');
		$this->load->view('template/__footerGlobal');
	}
}