<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Empresa extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        }

        public function index()
        {
            $this->load->view('templates/header');
            $this->load->view('cadastro_empresa');
            $this->load->view('templates/footer');
        }

        public function cadastro()
        {
            $data = array(
                'nome' => $this->input->post('nome'),
                'cnpj' => $this->input->post('cnpj')
            );
    
            $this->load->view('templates/header');
            $this->load->view('empresa_gestao', $data);
            $this->load->view('templates/footer');
        }
    }