<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{

    public function view($page = "home"){
        if($page == "servicos"){
            $data['title'] = "Serviços";
        }else{
            $data['title'] = ucfirst($page);
        }
        $data["descricao"] = "Desde 2002 a LC Incorporações atua no mercado imobiliário nas áreas de incorporação e construção. São mais de 120 unidades residenciais e comerciais, totalizando mais de 20.000 m² construídos ao longo de 8 anos. Está sediada na cidade de Taquara, Rio Grande Sul, atuando na região do Paranhana, Serra e Litoral.";
        $data['file'] = $page;
        $data['imagem'] = base_url() . "imgs/empreendimentos/foto-gardens.jpg";

        $this->load->template($page,$data);
    }

}