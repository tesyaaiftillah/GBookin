<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Membership extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load the necessary models
        $this->load->model('Users_model');
        $this->load->model('Memberships_model');
    }

    public function index()
    {
        // Retrieve all memberships from the database
        $data['memberships'] = $this->Memberships_model->getAllMemberships();

        // Load the view to display the memberships
        $this->load->view('memberships/index', $data);
    }

    public function create()
    {
        // Process the form submission
        if ($this->input->post()) {
            $userId = $this->input->post('user_id');
            $membershipType = $this->input->post('membership_type');
            $expirationDate = $this->input->post('expiration_date');

            // Add the membership to the database
            $membershipId = $this->Memberships_model->addMembership($userId, $membershipType, $expirationDate);

            if ($membershipId) {
                // Membership added successfully
                redirect('memberships');
            } else {
                // Error adding the membership
                $data['error'] = 'Failed to add the membership';
            }
        }

        // Retrieve all users for the form dropdown
        $data['users'] = $this->Users_model->getAllUsers();

        // Load the view to create a new membership
        $this->load->view('memberships/create', $data);
    }

    public function delete($membershipId)
    {
        // Delete the membership from the database
        $deleted = $this->Memberships_model->deleteMembership($membershipId);

        if ($deleted) {
            // Membership deleted successfully
            redirect('memberships');
        } else {
            // Error deleting the membership
            $data['error'] = 'Failed to delete the membership';
            $this->load->view('memberships/index', $data);
        }
    }
}
