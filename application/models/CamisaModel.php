<?php

class CamisaModel extends CI_Model {

    public function selectAll()
    {
        $query = $this->db->query("select * from 'Camisas'");
        return $query;
    }
}