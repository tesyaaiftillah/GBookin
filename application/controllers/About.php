<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
        $data['title'] = 'GBookIn - About Us';
		$this->load->view('template/__headGlobal', $data);
		$this->load->view('template/__navbarGlobal');
		$this->load->view('about');
		$this->load->view('template/__footerGlobal');
	}
}