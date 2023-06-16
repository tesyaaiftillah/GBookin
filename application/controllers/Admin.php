<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model('Kriteria_data');
        $this->load->library('pagination');
		$this->load->helper(array('form', 'url'));
    }
	public function index()
	{
        $this->load->library('pagination');

		// Config
		$config['base_url'] = 'http://localhost/sp/admin/index';
		$config['total_rows'] = $this->Kriteria_data->countAllKriteria();
		$config['per_page'] = 3;

		// Styling
		$config['full_tag_open'] = '<nav class="ms-auto" style="width:25%;"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';
		
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		
		$config['cur_tag_open'] = '<li class="page-item active">';
		$config['cur_tag_close'] = '</li>';
		
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

        // Initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['show'] = $this->Kriteria_data->show($config['per_page'], $data['start']);
		$this->load->view('admin', $data);
	}
    
}
