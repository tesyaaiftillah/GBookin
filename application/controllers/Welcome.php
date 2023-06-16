<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('Kriteria_data');

		$data['show'] = $this->Kriteria_data->showKriteria();
		$this->load->view('welcome_message', $data);
	}

	function Kualitas()
    {
		$this->load->model('Kriteria_data');

        $kriteria1 = $this->input->post('kriteria1');
        $kriteria2 = $this->input->post('kriteria2');
		$kriteria3 = $this->input->post('kriteria3');
        $kriteria4 = $this->input->post('kriteria4');
		$kriteria5 = $this->input->post('kriteria5');
        $kriteria6 = $this->input->post('kriteria6');

        $data['hasil'] = $kriteria1 + $kriteria2 + $kriteria3 + $kriteria4 + $kriteria5 + $kriteria6;
		$data['rules'] = $this->Kriteria_data->rules();
		
		$this->load->view('hasil', $data);
    }
}
