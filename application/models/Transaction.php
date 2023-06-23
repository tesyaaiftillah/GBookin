<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaction extends CI_Model
{
    private $table = 'transaction';

    //menampilkan data buku berdasarkan id
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["transaction_id" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from mahasiswa where book_id='$id'
    }

    //menampilkan semua data buku
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("transaction_id");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from buku order by book_id desc
    }

    //menyimpan data buku
    public function save()
    {
        $data = array(
            "transaction_id" => $this->input->post('transaction_id'),
            "user_id" => $this->input->post('user_id'),
            "transaction_id" => $this->input->post('amount'),
            "status" => $this->input->post('status'),
            "created_at" => $this->input->post(date('Y-m-d H:i:s')),
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data buku
    public function update()
    {
        $data = array(
            "user_id" => $this->input->post('user_id'),
            "transaction_id" => $this->input->post('amount'),
            "status" => $this->input->post('status'),
            "created_at" => $this->input->post(date('Y-m-d H:i:s')),
        );
        return $this->db->update($this->table, $data, array('transaction_id' => $this->input->post('transaction_id')));
    }

    //hapus data buku
    public function delete($id)
    {
        return $this->db->delete($this->table, array("transaction_id" => $id));
    }
}
