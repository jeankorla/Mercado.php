<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

	public function index()
	{   
        $this->load->view('templates/header');
		$this->load->view('cadastro_produto');
        $this->load->view('templates/footer');
	}

    public function cadastro()
    {
        //CADASTRANDO NO DATA BASE
        $this->load->database('Produtos');

        $data = array(
            'nome' => $this->input->post('nome'),
            'custo' =>$this->input->post('custo'),
            'preco' => $this->input->post('preco')
        );

        $this->db->insert('Produtos', $data);

        //CARREGANDO DATA BASE
        $this->load->model('ProdutoModel');
    
        $data['produtos'] = $this->ProdutoModel->selectAll();

        $this->load->view('templates/header');
        $this->load->view('gestao_produto', $data);
        $this->load->view('templates/footer');
    }
}