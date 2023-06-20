<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model {
    
    function Register($data)
    {
        return $this->db->insert('users', $data);
    }
}