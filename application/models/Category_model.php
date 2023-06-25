<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends CI_Model
{

    public function addCategory($categoryName)
    {
        $data = array(
            'category_name' => $categoryName
        );
        $this->db->insert('categories', $data);

        // Return the inserted category ID
        return $this->db->insert_id();
    }

    public function getCategory($categoryId)
    {
        $this->db->where('category_id', $categoryId);
        $query = $this->db->get('categories');

        if ($query->num_rows() > 0) {
            return $query->row();
        }

        return false;
    }

    public function getAllCategories()
    {
        $query = $this->db->get('categories');

        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return false;
    }

    public function deleteCategory($categoryId)
    {
        $this->db->where('category_id', $categoryId);
        $this->db->delete('categories');

        // Return true if the deletion was successful, false otherwise
        return $this->db->affected_rows() > 0;
    }
}
