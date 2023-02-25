<?php

class ProdutoModel extends CI_Model {

    public function selectAll()
    {
        return $this->db->get('Produtos')->result_array();
    }

    public function excluir_produto($id) {
        $this->db->where('id', $id);
        $this->db->delete('Produtos');
    }
    public function atualizar_produto($id, $nome, $custo, $preco)
{
    
    $data = array(
        'nome' => $nome,
        'custo' => $custo,
        'preco' => $preco
    );
    $this->db->where('id', $id);
    $this->db->update('produtos', $data);
}

}