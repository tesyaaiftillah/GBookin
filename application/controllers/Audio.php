<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Audio extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load the AudioContent_model
        $this->load->model('AudioContent_model');
    }

    public function index()
    {
        // Retrieve all audio content from the database
        $data['audioContent'] = $this->AudioContent_model->getAllAudioContent();

        // Load the view to display the audio content
        $this->load->view('audio_content/index', $data);
    }

    public function playAudio($audioId)
    {
        // Load the Audio_content_model
        $this->load->model('Audio_content_model');

        // Get the audio content details from the database
        $audio = $this->Audio_content_model->getAudioContentById($audioId);

        if ($audio) {
            $file = './uploads/audio/' . $audio->file;

            // Check if the file exists
            if (file_exists($file)) {
                // Set the appropriate content type
                header('Content-Type: audio/mpeg');

                // Display the file in the browser
                readfile($file);
            } else {
                // File not found
                show_error('The file does not exist.');
            }
        } else {
            // Audio content not found
            show_error('The audio content does not exist.');
        }
    }



    public function create()
    {
        // Load necessary models and libraries
        $this->load->model('AudioContent_model');
        $this->load->model('Categories_model');
        $this->load->library('upload');

        // Process the form submission
        if ($this->input->post()) {
            // Set up file upload configuration
            $config['upload_path'] = './uploads/audio/'; // Specify the upload directory
            $config['allowed_types'] = 'mp3'; // Specify allowed file types
            $config['max_size'] = 2048; // Specify maximum file size (in kilobytes)

            $this->upload->initialize($config);

            if ($this->upload->do_upload('file')) {
                // File uploaded successfully
                $fileData = $this->upload->data();
                $file = $fileData['file_name'];
                $categoryId = $this->input->post('category_id');

                // Add the audio content to the database
                $audioId = $this->AudioContent_model->addAudioContent($file, $categoryId);

                if ($audioId) {
                    // Audio content added successfully
                    redirect('audio_content');
                } else {
                    // Error adding the audio content
                    $data['error'] = 'Failed to add the audio content';
                }
            } else {
                // Error uploading the file
                $data['error'] = $this->upload->display_errors();
            }
        }

        // Retrieve all categories for the form dropdown
        $data['categories'] = $this->Categories_model->getAllCategories();

        // Load the view to create new audio content
        $this->load->view('audio_content/create', $data);
    }

    public function delete($audioId)
    {
        // Delete the audio content from the database
        $deleted = $this->AudioContent_model->deleteAudioContent($audioId);

        if ($deleted) {
            // Audio content deleted successfully
            redirect('audio_content');
        } else {
            // Error deleting the audio content
            $data['error'] = 'Failed to delete the audio content';
            $this->load->view('audio_content/index', $data);
        }
    }
}
