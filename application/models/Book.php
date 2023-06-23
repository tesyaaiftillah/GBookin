<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book extends CI_Model
{
    private $table = 'book';
    private $tableAudio = 'BookAudio';

    //menampilkan data buku berdasarkan id
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["book_id" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from mahasiswa where book_id='$id'
    }

    //menampilkan semua data buku
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("book_id");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from buku order by book_id desc
    }

    //menyimpan data buku
    public function save()
    {
        $data = array(
            "title" => $this->input->post('title'),
            "author" => $this->input->post('author'),
            "category_id" => $this->input->post('category_id'),
            "audio_id" => $this->input->post('audio_id'),
            "created_at" => $this->input->post(date('Y-m-d H:i:s')),
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data buku
    public function update()
    {
        $data = array(
            "title" => $this->input->post('title'),
            "author" => $this->input->post('author'),
            "category_id" => $this->input->post('category_id'),
            "created_at" => $this->input->post(date('Y-m-d H:i:s')),
        );
        return $this->db->update($this->table, $data, array('book_id' => $this->input->post('book_id')));
    }

    //hapus data buku
    public function delete($id)
    {
        return $this->db->delete($this->table, array("book_id" => $id));
    }



    //menampilkan data buku berdasarkan id
    public function getById_audio($id)
    {
        return $this->db->get_where($this->tableAudio, ["audio_id" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from mahasiswa where book_id='$id'
    }

    //menampilkan semua data audio buku
    public function getAll_audio()
    {
        $this->db->from($this->tableAudio);
        $this->db->order_by("audio_id");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from buku order by book_id desc
    }

    //menyimpan data audio buku
    public function save_audio()
    {
        $data = array(
            "audio_id" => $this->input->post("audio_id"),
            "file" => $this->input->post('file'),
            "category_id" => $this->input->post('category_id'),
            "created_at" => $this->input->post(date('Y-m-d H:i:s')),
        );
        return $this->db->insert($this->tableAudio, $data);
    }

    //edit data audio buku
    public function update_audio()
    {
        $data = array(
            "file" => $this->input->post('file'),
            "category_id" => $this->input->post('category_id'),
            "created_at" => $this->input->post(date('Y-m-d H:i:s')),
        );
        return $this->db->update($this->tableAudio, $data, array('audio_id' => $this->input->post('audio_id')));
    }

    //hapus data audio buku
    public function delete_audip($id)
    {
        return $this->db->delete($this->tableAudio, array("audio_id" => $id));
    }
}
