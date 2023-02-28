<?php

class CamisaModel extends CI_Model {

    public function selectAll()
    {
        return $this->db->get('Camisas')->result_array();
    }

    public function excluir($id)
    {
    $this->db->where('ID', $id);
    $this->db->delete('Camisas');
    }
}