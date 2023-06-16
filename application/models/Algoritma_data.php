<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Algoritma_data extends CI_Model{

        function show()
        {
            $this->db->select('kriteria.id_kriteria, kriteria.kode, kriteria.keterangan, kriteria.grade, kriteria.grade_id, kriteria.kode_id, grade.id_grade, grade.point, kode.id_kode, kode.kode_keterangan');
            $this->db->from('kriteria');
            $this->db->join('grade', 'kriteria.grade_id = grade.id_grade');
            $this->db->join('kode', 'kriteria.kode_id = kode.id_kode');
            $this->db->get('')->result_array();
        }
    }