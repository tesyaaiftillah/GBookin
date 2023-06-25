<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load the Book_model
        $this->load->model('Book_model');
    }

    public function index()
    {
        // Retrieve all books from the database
        $data['books'] = $this->Book_model->getAllBooks();

        // Load the view to display the books
        $this->load->view('books/index', $data);
    }

    public function readBook($bookId)
    {
        // Load the Book_model
        $this->load->model('Book_model');

        // Get the book details from the database
        $book = $this->Book_model->getBookById($bookId);

        if ($book) {
            $file = './uploads/books/' . $book->file;

            // Check if the file exists
            if (file_exists($file)) {
                // Set the appropriate content type
                header('Content-Type: application/pdf');

                // Display the file in the browser
                readfile($file);
            } else {
                // File not found
                show_error('The file does not exist.');
            }
        } else {
            // Book not found
            show_error('The book does not exist.');
        }
    }




    public function create()
    {
        // Process the form submission
        if ($this->input->post()) {
            $title = $this->input->post('title');
            $author = $this->input->post('author');
            $categoryId = $this->input->post('category_id');
            $audioId = $this->input->post('audio_id');

            // Add the book to the database
            $bookId = $this->Book_model->addBook($title, $author, $categoryId, $audioId);

            if ($bookId) {
                // Book added successfully
                redirect('books');
            } else {
                // Error adding the book
                $data['error'] = 'Failed to add the book';
            }
        }

        // Retrieve all audio content and categories for the form dropdowns
        $this->load->model('Audio_model');
        $this->load->model('Category_model');
        $data['audio'] = $this->Audio_model->getAllAudio();
        $data['categories'] = $this->Category_model->getAllCategories();

        // Load the view to create a new book
        $this->load->view('books/create', $data);
    }

    public function delete($bookId)
    {
        // Delete the book from the database
        $deleted = $this->Book_model->deleteBook($bookId);

        if ($deleted) {
            // Book deleted successfully
            redirect('books');
        } else {
            // Error deleting the book
            $data['error'] = 'Failed to delete the book';
            $this->load->view('books/index', $data);
        }
    }
}
