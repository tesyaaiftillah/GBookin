<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book_model extends CI_Model
{

    public function addBook($title, $author, $categoryId, $audioId)
    {
        $data = array(
            'title' => $title,
            'author' => $author,
            'category_id' => $categoryId,
            'audio_id' => $audioId
        );
        $this->db->insert('book', $data);

        // Return the inserted book ID
        return $this->db->insert_id();
    }

    public function getBook($bookId)
    {
        $this->db->where('book_id', $bookId);
        $query = $this->db->get('book');

        if ($query->num_rows() > 0) {
            return $query->row();
        }

        return false;
    }

    public function getAllBooks()
    {
        $query = $this->db->get('book');

        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return false;
    }

    public function deleteBook($bookId)
    {
        $this->db->where('book_id', $bookId);
        $this->db->delete('book');

        // Return true if the deletion was successful, false otherwise
        return $this->db->affected_rows() > 0;
    }
}
