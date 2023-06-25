<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Membership_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Create a new membership
    public function create_membership($data)
    {
        return $this->db->insert('memberships', $data);
    }

    // Read all memberships
    public function get_all_memberships()
    {
        return $this->db->get('memberships')->result();
    }

    // Read a specific membership by ID
    public function get_membership($membership_id)
    {
        $this->db->where('membership_id', $membership_id);
        return $this->db->get('memberships')->row();
    }

    // Update a membership
    public function update_membership($membership_id, $data)
    {
        $this->db->where('membership_id', $membership_id);
        return $this->db->update('memberships', $data);
    }

    // Delete a membership
    public function delete_membership($membership_id)
    {
        $this->db->where('membership_id', $membership_id);
        return $this->db->delete('memberships');
    }
}
