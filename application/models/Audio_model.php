<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Audio_model extends CI_Model
{

    public function addAudio($file, $categoryId)
    {
        $data = array(
            'file' => $file,
            'category_id' => $categoryId
        );
        $this->db->insert('audio_content', $data);

        // Return the inserted audio ID
        return $this->db->insert_id();
    }

    public function addAudioContent($file, $categoryId)
    {
        $data = array(
            'file' => $file,
            'category_id' => $categoryId,
            'created_at' => date('Y-m-d H:i:s')
        );

        $this->db->insert('audio_content', $data);

        return $this->db->insert_id();
    }

    public function getAudio($audioId)
    {
        $this->db->where('audio_id', $audioId);
        $query = $this->db->get('audio_content');

        if ($query->num_rows() > 0) {
            return $query->row();
        }

        return false;
    }

    public function getAllAudio()
    {
        $query = $this->db->get('audio_content');

        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return false;
    }

    public function deleteAudio($audioId)
    {
        $this->db->where('audio_id', $audioId);
        $this->db->delete('audio_content');

        // Return true if the deletion was successful, false otherwise
        return $this->db->affected_rows() > 0;
    }
}
