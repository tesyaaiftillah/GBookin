<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function updateMembership($userId, $membershipType)
    {
        $data = array(
            'membership_type' => $membershipType
        );

        // Update the user's membership in the 'users' table
        $this->db->where('user_id', $userId);
        $this->db->update('users', $data);

        // Return true if the update was successful, false otherwise
        return $this->db->affected_rows() > 0;
    }
    public function checkMembershipStatus($userId)
    {
        // Get the user's membership information from the 'memberships' table
        $this->db->select('expiration_date');
        $this->db->from('memberships');
        $this->db->where('user_id', $userId);
        $this->db->order_by('membership_id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();
            $expirationDate = $row->expiration_date;

            // Compare the expiration date with the current date
            $today = date('Y-m-d');
            if ($expirationDate >= $today) {
                // Membership is still active
                return true;
            }
        }

        // Membership has expired
        return false;
    }
}
