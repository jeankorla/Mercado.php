<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('usuario_cadastro');
        $this->load->view('templates/footer');
    }

    public function cadastro()
    {
        $data = array(
            'nome' => $this->input->post('nome'),
            'sobrenome' => $this->input->post('sobrenome'),
            'idade' => $this->input->post('idade'),
            'email' => $this->input->post('email'),
            'senha' => $this->input->post('senha')
        );

        $this->load->view('templates/header');
        $this->load->view('usuario_gestao', $data);
        $this->load->view('templates/footer');
    }

}