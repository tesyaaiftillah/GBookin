<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Model
{
    private $table = 'categories';

    //menampilkan data buku berdasarkan id
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["categories_id" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from mahasiswa where categories_id='$id'
    }

    //menampilkan semua data buku
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("categories_id", "desc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by categories_id desc
    }

    //menyimpan data buku
    public function save()
    {
        $data = array(
            "Nama" => $this->input->post('Nama'),
            "JenisKelamin" => $this->input->post('JenisKelamin'),
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
        return $this->db->update($this->table, $data, array('categories_id' => $this->input->post('categories_id')));
    }

    //hapus data buku
    public function delete($id)
    {
        return $this->db->delete($this->table, array("categories_id" => $id));
    }
}
