<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ObrasModel extends CI_Model{
    private $obras = array();

    public function __construct(){
		parent::__construct();
		$_json = file_get_contents(base_url()."public/data/obras.json");

        $this->obras = json_decode($_json);
    }

    public function _get($slug = ""){
        if($slug !== ""){
            foreach ($this->obras as $obra) {
                if($obra->slug == $slug){
                    return $obra;
                }
            }
        }else{
            return $this->obras;
        }
    }
}