<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load the Categories_model
        $this->load->model('Categories_model');
    }

    public function index()
    {
        // Retrieve all categories from the database
        $data['categories'] = $this->Categories_model->getAllCategories();

        // Load the view to display the categories
        $this->load->view('categories/index', $data);
    }

    public function create()
    {
        // Process the form submission
        if ($this->input->post()) {
            $categoryName = $this->input->post('category_name');

            // Add the category to the database
            $categoryId = $this->Categories_model->addCategory($categoryName);

            if ($categoryId) {
                // Category added successfully
                redirect('categories');
            } else {
                // Error adding the category
                $data['error'] = 'Failed to add the category';
            }
        }

        // Load the view to create a new category
        $this->load->view('categories/create', $data);
    }

    public function delete($categoryId)
    {
        // Delete the category from the database
        $deleted = $this->Categories_model->deleteCategory($categoryId);

        if ($deleted) {
            // Category deleted successfully
            redirect('categories');
        } else {
            // Error deleting the category
            $data['error'] = 'Failed to delete the category';
            $this->load->view('categories/index', $data);
        }
    }
}
