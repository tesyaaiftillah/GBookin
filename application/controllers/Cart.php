<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function index()
	{
        $data['title'] = 'Bausastra - Cart';
		$this->load->view('template/__headGlobal', $data);
		$this->load->view('template/__navbarGlobal');
		$this->load->view('cart');
		$this->load->view('template/__footerGlobal');
	}
}