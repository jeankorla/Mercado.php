<?php

class ProdutoModel extends CI_Model {

    //BUSCA " TODAS " AS INFORMAÇÕES DO DB
    public function selectAll()
    {
        return $this->db->get('Produtos')->result_array();
    }

    //EXCLUI PRODUTO SELECIONADO
    public function excluir_produto($id) {
        //O WHERE É USADO PARA FILTRAR OQUE DESEJAMOS, NO CASO DO CODIGO, O QUE ESTA SENDO PASSADO PARA $ID
        $this->db->where('id', $id);
        $this->db->delete('Produtos');
    }
    
    //ATUALIZA PRODUTOS NA DB
    public function atualizar_produto($id, $nome, $custo, $preco)
    {
    
    //SALVA NA VARIAVEL $DATA A ARRAY COM AS COLUNAS SELECIONADAS
    $data = array(
        'nome' => $nome,
        'custo' => $custo,
        'preco' => $preco
    );
    //ESPECIFICA O $ID UTILIZADO, PARA ASSIM SER FEITO O UPGRADE DE INFORMAÇÕES
    $this->db->where('id', $id);
    $this->db->update('Produtos', $data);
    }

    //DIFERENTE DA FUNÇÃO "SelectAll()" ESSA FUNÇÃO USA O GET_WHERE PARA " PEGAR " SOMENTE AQUILO QUE DESEJA.
    public function filter($id){

        $condition = array('id' => $id);
        $result = $this->db->get_where('Produtos', $condition)->row_array();
        return $result;

    }
}