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
		$this->load->view('cadastro_produto');
	}

    public function cadastro()
    {
        $data = array(
            'nome' => $this->input->post('nome'),
            'custo' => $this->input->post('custo'),
            'preco' => $this->input->post('preco')
        );

        $this->load->view('gestao_produto', $data);
    }
}