<?php

class UsuarioModel extends CI_Model {

    public function selectAll()
    {
        return $this->db->get('Usuarios')->result_array();
    }
}