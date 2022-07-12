<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmpreendimentosModel extends CI_Model{

    private $empreendimentos;

    public function __construct(){
		parent::__construct();
		$_json = file_get_contents(base_url()."public/data/empreendimentos.json");

		$this->empreendimentos = json_decode($_json);
    }
    
    public function _get($slug = ""){
        if($slug !== ""){
            foreach($this->empreendimentos as $empreendimento){
                if($empreendimento->slug == $slug){
                    return $empreendimento;
                }
            }
        }else{
            return $this->empreendimentos;
        }
    }

}