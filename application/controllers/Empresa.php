<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Empresa extends CI_Controller{

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
            $this->load->view('Cadastro/cadastro_empresa');
            $this->load->view('templates/footer');
        }

        //FUNÇÃO DE CADASTRO
        public function cadastro()
        {   
           //ADICIONA A VARIAVEL $DATA AS ARRAY'S SELECIONADAS 
            $data = array(
                'nome' => $this->input->post('nome'),
                'cnpj' => $this->input->post('cnpj')
            );
    
            $this->load->view('templates/header');
            $this->load->view('Gestão/empresa_gestao', $data);
            $this->load->view('templates/footer');
        }
    }