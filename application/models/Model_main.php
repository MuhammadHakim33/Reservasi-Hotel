<?php

class Model_main extends CI_Model 
{
    public function get_data($table, $where = NULL)
    {
        $query = $this->db->get_where($table, $where);
        return $query->result_array();
    }

    public function get_certain_column($table, $column, $where = NULL)
    {
        $this->db->select($column);
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert_data($table, $input, $get_id = NULL) 
    {
        $this->db->insert($table, $input);
        
        if($get_id === 'GET')
            return $this->db->insert_id();
    }

    public function delete_data($table, $where) 
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_data($table, $input, $where) 
    {
        $this->db->where($where);
        $this->db->update($table, $input);
    }

    public function search_data($table, $keyword) 
    {
        $this->db->select('*');
        $this->db->from($table);

        if($keyword) 
        {
            $this->db->where('nama_tamu', $keyword['nama_tamu']);
            $this->db->or_where('check_in_kamar', $keyword['check_in_kamar']);
        }

        $query = $this->db->get();
        return $query->result_array();
    }
}
