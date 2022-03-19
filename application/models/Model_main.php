<?php

class Model_main extends CI_Model {
    public function getData($table, $where = null)
    {
        $data = $this->db->get_where($table, $where);
        return $data->result_array();
    }
}
