<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model {
    
    function Session()
    {
       return $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
    }

    function Validation($email)
    {
        $this->db->get_where('users', ['email' => $email])->row_array();
    }

    function RegisterData($data)
    {
        $this->db->insert('users', $data);
    }

}