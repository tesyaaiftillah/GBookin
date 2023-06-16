<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Kriteria_data extends CI_Model{

        function show($limit, $start)
        {
            $this->db->select('*');
            $this->db->from('kriteria');
            return $this->db->get('',$limit, $start)->result_array();
        }

        function showKriteria()
        {
            $this->db->select('kriteria.kode, kriteria.keterangan, kriteria.kode_id, kriteria.grade_id, kode.id_kode, grade.id_grade, grade.point'); 
            $this->db->from('kriteria');
            $this->db->join('kode', 'kriteria.kode_id = kode.id_kode');
            $this->db->join('grade', 'kriteria.grade_id = grade.id_grade'); 
            return $this->db->get('')->result_array();         
        }

        function tampil()
        {
           return $this->db->get('kriteria')->result_array();
        }

        function countAllKriteria()
        {
            return $this->db->get('kriteria')->num_rows();
        }

        function rules()
        {
            $this->db->select('rules.kode, rules.keterangan');
            $this->db->from('rules');
            return $this->db->get('')->result_array();
        }
    }
