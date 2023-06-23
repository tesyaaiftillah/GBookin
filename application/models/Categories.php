<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Model
{
    private $table = 'categories';

    //menampilkan data buku berdasarkan id
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["category_id" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from mahasiswa where categories_id='$id'
    }

    //menampilkan semua data buku
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("category_id", "desc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by categories_id desc
    }

    //menyimpan data buku
    public function save()
    {
        $data = array(
            "category_id" => $this->input->post('category_id'),
            "category_name" => $this->input->post('category_name'),
            "created_at" => $this->input->post(date('Y-m-d H:i:s'))
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data buku
    public function update()
    {
        $data = array(
            "category_id" => $this->input->post('category_id'),
            "category_name" => $this->input->post('category_name'),
            "created_at" => $this->input->post(date('Y-m-d H:i:s'))
        );
        return $this->db->update($this->table, $data, array('category_id' => $this->input->post('category_id')));
    }

    //hapus data buku
    public function delete($id)
    {
        return $this->db->delete($this->table, array("category_id" => $id));
    }
}
