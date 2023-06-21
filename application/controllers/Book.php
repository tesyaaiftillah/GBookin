<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("bsook"); //load model buku
    }

    public function index()
    {
    }
}
