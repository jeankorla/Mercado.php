<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Camisa extends CI_Controller {

    public $db;
    public $input;
    public $CamisaModel;

    public function index()
    {
        $this->load->model('CamisaModel');
        
        $data['camisas'] = $this->CamisaModel->selectAll();

        $this->load->view('templates/header');
        $this->load->view('gestao/camisa', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        

        $data = array(
            'nome' => $this->input->post('nome'),
            'tamanho' =>$this->input->post('tamanho'),
            'cor' => $this->input->post('cor')
        );

        $this->db->insert('Camisas', $data);

        $this->load->model('CamisaModel');
    
        $data['camisas'] = $this->CamisaModel->selectAll();

        $this->load->view('templates/header');
        $this->load->view('gestao/camisa', $data);
        $this->load->view('templates/footer');
    }
}