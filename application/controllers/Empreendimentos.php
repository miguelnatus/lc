<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH.'libraries/CsvRegister.php';

class Empreendimentos extends CI_Controller{
    
    // private $csv = "https://docs.google.com/spreadsheets/d/e/2PACX-1vRFzUcCv5u2limZFiS6jF9EY9qBprCxtA4ypSX6npD53MYyBU9dgw8YUzCSZVRuQ0nZt_I0hW8TPuSd/pub?output=csv";
    private $csv = "https://docs.google.com/spreadsheets/d/17TlnABWCvj_XA5JuvnPAq6pMoswq3Au6TmXVaSLB4-8/export?format=csv&gid=0";

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $data['title'] = "Empreendimentos";
        $data['file'] = "empreendimentos";
        $data['empreendimentos'] = $this->EmpreendimentosModel->_get();
        $data['imagem'] = base_url() . "imgs/empreendimentos/foto-gardens.jpg";
        $data['descricao'] = "Empreendimentos prediais LC Incorporações.";

        $this->load->template("empreendimentos",$data);
    }

    public function detalhes($slug){

        $objCsv = new CsvRegister;
        
        $data['file'] = "realizados-detalhes";
        $data['empreendimento'] = $this->EmpreendimentosModel->_get($slug);
        // echo '<pre>';
        // print_r($data['empreendimento']);
        // $data['andamento'] = $objCsv->getRow($this->csv,"empreendimento",$data['empreendimento']->nome);
        $data['descricao'] = $data['empreendimento']->descricao;
        $data['imagem'] = base_url() . "imgs/empreendimentos/capas/" . $data['empreendimento']->foto_capa;
        $data['title'] = $data['empreendimento']->nome;

        // array_shift($data['andamento']);

        // $objCsv->setJson($data['andamento']);

        $this->load->template("empreendimentos-detalhes",$data);
    }

} 