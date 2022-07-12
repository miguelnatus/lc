<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obras extends CI_Controller{ 
    public function __construct(){
		parent::__construct();
        
        $this->load->model("ObrasModel");
    }

    public function index(){
        $page = "obras";
        $data['file'] = $page;
        $data['title'] = "Obras";
        $data['obras'] = $this->ObrasModel->_get();
        $data['descricao'] = "Obras de prédios comerciais, residenciais, edfícios, residências e obras públicas.";
        $data['imagem'] = base_url() . "imgs/empreendimentos/foto-gardens.jpg";
        
        $this->load->template($page,$data);
    }

    public function detalhes($type,$slug){
        $page = "realizados-detalhes";
        $data['file'] = "realizados-detalhes";
        $data['title'] = "Obras";
        $data['obra'] = $this->ObrasModel->_get($slug);
        $data['descricao'] = $data['obra']->descricao;
        $data['imagem'] = base_url() . "imgs/empreendimentos/capas/" . $data['obra']->foto_capa;

        $this->load->template($page,$data);
    }
}