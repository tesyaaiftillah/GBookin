<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller {

	public function index()
	{
        $data['title'] = 'GBookIn - Wishlist';
		$this->load->view('template/__headGlobal', $data);
		$this->load->view('template/__navbarGlobal');
		$this->load->view('wishlist');
		$this->load->view('template/__footerGlobal');
	}
}