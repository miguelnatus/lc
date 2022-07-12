<?php

function fotos($dir,$fotos,$empreendimento){
    if(isset($fotos) && !empty($fotos)){
        $html = "<ul class='foto-ampliada'>
        <li class='selecionada'><a href='".base_url()."public/imgs/empreendimentos/detalhes/".$empreendimento->slug."/".$dir."/".$fotos[0]."'><img src='".base_url()."public/imgs/empreendimentos/detalhes/".$empreendimento->slug."/".$dir."/".$fotos[0]."' alt=''></a></li>";

        array_shift($fotos);
        foreach($fotos as $foto){
            $html .= "<li><a href='".base_url()."public/imgs/empreendimentos/detalhes/".$empreendimento->slug."/".$dir."/".$foto."'><img src='".base_url()."public/imgs/empreendimentos/detalhes/".$empreendimento->slug."/".$dir."/".$foto."' alt=''></a></li>";
        }

        $html .= "</ul>";

        return $html;
    }else{
        return "";
    }
}

function menu($empreendimento){
    $html = '<ul class="categorias-fotos clearfix">';

    if(isset($empreendimento->fotos_empreendimentos) && !empty($empreendimento->fotos_empreendimentos))
        $html .= '<li class="ativo"><a href="#o-empreendimento">O Empreendimento</a></li>';    

    if(isset($empreendimento->fotos_plantas) && !empty($empreendimento->fotos_plantas))
        $html .= '<li><a href="#plantas">Plantas</a></li>';

    if(isset($empreendimento->fotos_obras) && !empty($empreendimento->fotos_obras))
        $html .= '<li><a href="#obra">A Obra</a></li>';

    $html .= '</ul>';
    echo $html;
}

function empreendimentosCapas(){
    $ci =& get_instance();
    $ci->load->model("EmpreendimentosModel");

    $empreendimentos = $ci->empreendimentosmodel->_get();
    $capas = array();

    foreach ($empreendimentos as $empreendimento) {
        array_push($capas,$empreendimento->foto_capa);
    }

    return $capas;
}

function getEmpreendimentos(){
    $ci =& get_instance();

    $empreendimentos = $ci->EmpreendimentosModel->_get();
    $data_array = array();

    foreach ($empreendimentos as $empreendimento) {
        if(!isset($empreendimento->status)){
            array_push($data_array,$empreendimento);
        }
    }

    return $data_array;
}