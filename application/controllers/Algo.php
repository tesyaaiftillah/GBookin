<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Algo extends CI_Controller {
	
    function Kualitas()
    {
        $this->load->model('Algoritma_data');

        $kriteria1 = $this->input->post('kriteria1');
        $kriteria2 = $this->input->post('kriteria2');

        $data['hasil'] = $kriteria1 + $kriteria2;
    }
}
