<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    public function __construct()
    {
		parent::__construct();
		$this->load->model('Auth');
    }

	public function index()
	{
        $data['title'] = 'Bausastra - Account Setting';
        
		$this->load->view('template/__headGlobal', $data);
		$this->load->view('account');
		$this->load->view('template/__footerGlobal');
	}
}