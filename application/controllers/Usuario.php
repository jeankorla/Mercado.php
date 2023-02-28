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
        $this->load->view('Cadastro/usuario_cadastro');
        $this->load->view('templates/footer');
    }

    public function cadastro()
    {   
        //cadastrando usuarios
        $this->load->database('Usuarios');

        $data = array(

            'nome' => $this->input->post('nome'),
            'sobrenome' => $this->input->post('sobrenome'),
            'idade' => $this->input->post('idade'),
            'email' => $this->input->post('email'),
            'senha' => $this->input->post('senha'),
        );

        $this->db->insert('Usuarios', $data);


        //carregando usuarios

        $this->load->model('UsuarioModel');

        $data['usuarios'] = $this->UsuarioModel->selectAll();

        $this->load->view('templates/header');
        $this->load->view('Gestão/usuario_gestao', $data);
        $this->load->view('templates/footer');
    }

}