<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Função base_url()
 * @param type $function
 */
function base_url($function){
    $filename = $function;
    if(file_exists(APP.$filename)){
   echo 'http://'.$_SERVER['HTTP_HOST'].PROJECTNAME.'/app/'.$function;
    }
    elseif(file_exists(SYSTEM.$filename)){
        echo 'http://'.$_SERVER['HTTP_HOST'].PROJECTNAME.'/app/'.$function;
    }else{
        echo 'Arquivo base_url não encontrado';
    }
}