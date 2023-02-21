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
        $this->load->view('templates/header');
        $this->load->view('camisa_cadastro');
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->database('');

        $data = array(
            'nome' => $this->input->post('nome'),
            'tamanho' =>$this->input->post('tamanho'),
            'cor' => $this->input->post('cor')
        );

        $this->db->insert('Camisas', $data);

        $this->load->model('CamisaModel');
    
        $data['camisas'] = $this->CamisaModel->selectAll();

        $this->load->view('templates/header');
        $this->load->view('camisa_gestao', $data);
        $this->load->view('templates/footer');
    }
}