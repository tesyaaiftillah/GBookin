<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaction extends CI_Model
{
    private $table = 'users';

    //menampilkan data buku berdasarkan id
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["user_id" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from mahasiswa where book_id='$id'
    }

    //menampilkan semua data buku
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("user_id");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from buku order by book_id desc
    }

    //menyimpan data buku
    public function save()
    {
        $data = array(
            "user_id" => $this->input->post('user_id'),
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "email" => $this->input->post('email'),
            "phone" => $this->input->post('phone'),
            "address" => $this->input->post('address'),
            "created_at" => $this->input->post(date('Y-m-d H:i:s')),
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data buku
    public function update()
    {
        $data = array(
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "email" => $this->input->post('email'),
            "phone" => $this->input->post('phone'),
            "address" => $this->input->post('address'),
            "created_at" => $this->input->post(date('Y-m-d H:i:s')),
        );
        return $this->db->update($this->table, $data, array('user_id' => $this->input->post('user_id')));
    }

    //hapus data buku
    public function delete($id)
    {
        return $this->db->delete($this->table, array("user_id" => $id));
    }
}
