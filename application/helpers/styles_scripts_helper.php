<?php

function _load($file,$extension){
    
    $path = "public/".$extension."/min/".$file.".min.".$extension; 
    
    if(file_exists($path)){
        echo base_url().$path;
    }

}