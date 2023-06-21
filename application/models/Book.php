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
        $this->db->order_by("book_id", "desc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from buku order by book_id desc
    }

    //menyimpan data buku
    public function save()
    {
        $data = array(
            "judul_buku" => $this->input->post('Nama'),
            "author" => $this->input->post('JenisKelamin'),
            "Alamat" => $this->input->post('Alamat'),
            "Agama" => $this->input->post('Agama'),
            "NoHp" => $this->input->post('NoHp'),
            "Email" => $this->input->post('Email')
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data buku
    public function update()
    {
        $data = array(
            "Nama" => $this->input->post('Nama'),
            "JenisKelamin" => $this->input->post('JenisKelamin'),
            "Alamat" => $this->input->post('Alamat'),
            "Agama" => $this->input->post('Agama'),
            "NoHp" => $this->input->post('NoHp'),
            "Email" => $this->input->post('Email')
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
        return $this->db->get_where($this->table, ["book_id" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from mahasiswa where book_id='$id'
    }

    //menampilkan semua data buku
    public function getAll_audio()
    {
        $this->db->from($this->table);
        $this->db->order_by("book_id", "desc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from buku order by book_id desc
    }

    //menyimpan data audio buku
    public function save_audio()
    {
        $data = array(
            "judul_buku" => $this->input->post('Nama'),
            "author" => $this->input->post('JenisKelamin'),
            "Alamat" => $this->input->post('Alamat'),
            "Agama" => $this->input->post('Agama'),
            "NoHp" => $this->input->post('NoHp'),
            "Email" => $this->input->post('Email')
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data buku
    public function update_audio()
    {
        $data = array(
            "Nama" => $this->input->post('Nama'),
            "JenisKelamin" => $this->input->post('JenisKelamin'),
            "Alamat" => $this->input->post('Alamat'),
            "Agama" => $this->input->post('Agama'),
            "NoHp" => $this->input->post('NoHp'),
            "Email" => $this->input->post('Email')
        );
        return $this->db->update($this->table, $data, array('book_id' => $this->input->post('book_id')));
    }

    //hapus data buku
    public function delete_audip($id)
    {
        return $this->db->delete($this->table, array("book_id" => $id));
    }
}
