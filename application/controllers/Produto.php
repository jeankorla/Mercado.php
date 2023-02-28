<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Produto extends CI_Controller {

        //CRIA UMA CLASSE PAI CONTRUTORA E PUXA O HELPER URL PARA QUE POSSAMOS PUXAR A URL BASE
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        }

        //HOME
        public function index()
        {   
            $this->load->view('templates/header');
            $this->load->view('Cadastro/cadastro_produto');
            $this->load->view('templates/footer');
        }

        //FUNÇÃO DE CADASTRO
        public function cadastro()
        {
            //CADASTRANDO NO BD
            $this->load->database('Produtos');

            //CARREGANDO PARA A VARIAVEL $DATA A ARRAY
            $data = array(
                'nome' => $this->input->post('nome'),
                'custo' =>$this->input->post('custo'),
                'preco' => $this->input->post('preco')
            );

            //INSERINDO NO BD
            $this->db->insert('Produtos', $data);

            //CARREGANDO BD
            $this->load->model('ProdutoModel');
        
            $data['produtos'] = $this->ProdutoModel->selectAll();

            $this->load->view('templates/header');
            $this->load->view('Gestão/gestao_produto', $data);
            $this->load->view('templates/footer');


        }
        
        public function view()
        {
            //CARREGANDO BD
            $this->load->model('ProdutoModel');
        
            $data['produtos'] = $this->ProdutoModel->selectAll();

            $this->load->view('templates/header');
            $this->load->view('Gestão/gestao_produto', $data);
            $this->load->view('templates/footer');
        }

        public function excluir($id) {
            $this->load->model('ProdutoModel');
            $this->ProdutoModel->excluir_produto($id);
            redirect('produto/view');
        }

        public function editar($id) {

            $this->load->model('ProdutoModel');

            $data['produto'] = $this->ProdutoModel->filter($id);

            $this->load->view('templates/header');
            $this->load->view('Edit/editar_produto', $data);
            $this->load->view('templates/footer');
        }

        public function salvar_edicao() {
            $this->load->model('ProdutoModel');
            $id = $this->input->post('id');
            
            $data['produto'] = $this->ProdutoModel->filter($id);

            $id = $this->input->post('id');
            $nome = $this->input->post('nome');
            $custo = $this->input->post('custo');
            $preco = $this->input->post('preco');
            $this->ProdutoModel->atualizar_produto($id, $nome, $custo, $preco);
            redirect('produto/view');
        }
    }