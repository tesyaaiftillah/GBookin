<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaction_model extends CI_Model
{

    public function createTransaction($userId, $amount)
    {
        $data = array(
            'user_id' => $userId,
            'amount' => $amount,
            'status' => 'Pending',
        );

        // Insert the transaction data into the 'transaction' table
        $this->db->insert('transaction', $data);

        // Return the inserted transaction ID
        return $this->db->insert_id();
    }
}
