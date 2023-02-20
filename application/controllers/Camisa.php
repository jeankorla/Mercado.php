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

    public function cadastro()
    {
        $this->load->model('CamisaModel');
    
        $data = $this->CamisaModel->selectAll();

        print_r($data);
        exit();

        $this->load->view('templates/header');
        $this->load->view('camisa_gestao', $data);
        $this->load->view('templates/footer');
    }
}