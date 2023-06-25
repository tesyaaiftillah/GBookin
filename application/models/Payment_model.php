<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment_model extends CI_Model
{

    public function createPayment($data)
    {
        // Insert the payment data into the 'payments' table
        $this->db->insert('payments', $data);

        // Return true if the insertion was successful, false otherwise
        return $this->db->affected_rows() > 0;
    }
}
