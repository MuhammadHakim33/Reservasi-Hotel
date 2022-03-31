<?php

class Model_main extends CI_Model {
    public function get_data($table, $where = null)
    {
        $data = $this->db->get_where($table, $where);
        return $data->result_array();
    }

    public function get_join_data($table_one, $table_two, $parameter_one, $parameter_two, $type = 'inner') {
        $this->db->select('*');
        $this->db->from($table_two);
        $this->db->join($table_one, $table_one . '.' . $parameter_one  . '=' . $table_two . '.' . $parameter_two, $type );
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert_data($table, $input) {
        $this->db->insert($table, $input);
    }

    public function delete_data($table, $where) {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_data($table, $input, $where) {
        $this->db->where($where);
        $this->db->update($table, $input);
    }

    public function search_data($table_one, $table_two, $parameter_one, $parameter_two, $keyword) {
        $this->db->select('*');
        $this->db->from($table_two);
        $this->db->join($table_one, $table_one . '.' . $parameter_one  . '=' . $table_two . '.' . $parameter_two );

        if($keyword) {
            $this->db->where('nama_tamu', $keyword['nama_tamu']);
            $this->db->or_where('check_in_kamar', $keyword['check_in_kamar']);
        }

        $query = $this->db->get();
        return $query->result_array();
    }
}
