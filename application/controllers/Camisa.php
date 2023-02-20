<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Camisa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('camisa_cadastro');
    }

    public function cadastro()
    {
        $data = array(
            'nome' => $this->input->post('nome'),
            'tamanho' => $this->input->post('tamanho'),
            'color' => $this->input->post('color')
        );

        $this->load->view('camisa_gestao', $data);
    }
}