<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payments extends CI_Model
{
    private $table = 'payments';

    //menampilkan data buku berdasarkan id
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["payment_id" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from mahasiswa where book_id='$id'
    }

    //menampilkan semua data buku
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("payment_id");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from buku order by book_id desc
    }

    //menyimpan data buku
    public function save()
    {
        $data = array(
            "payment_id" => $this->input->post('payment_id'),
            "user_id" => $this->input->post('user_id'),
            "transaction_id" => $this->input->post('transaction_id'),
            "payment_method" => $this->input->post('payment_method'),
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
            "transaction_id" => $this->input->post('transaction_id'),
            "payment_method" => $this->input->post('payment_method'),
            "status" => $this->input->post('status'),
            "created_at" => $this->input->post(date('Y-m-d H:i:s'))
        );
        return $this->db->update($this->table, $data, array('payment_id' => $this->input->post('payment_id')));
    }

    //hapus data buku
    public function delete($id)
    {
        return $this->db->delete($this->table, array("payment_id" => $id));
    }
}
