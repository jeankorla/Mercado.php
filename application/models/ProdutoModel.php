<?php

class ProdutoModel extends CI_Model {

    public function selectAll()
    {
        return $this->db->get('Produtos')->result_array();
    }
}