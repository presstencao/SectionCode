<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Load
 *
 * @author Fábio
 */
class Load {
   
    public function model ($param){
        $p = explode(',', $param);
       // var_dump($p);
         foreach ($p as $list) {
            $class = ucfirst($list) . '_model';
            if (file_exists(APP . 'model/' . $class . '.php')) {
                require_once(APP . 'model/' . $class . '.php');
                $namespaceClass = $class;
                $item = new ReflectionClass($namespaceClass);
               $this->$list= $item->newInstance();
               return $this->$list;
            }else{
                echo "Erro ao tentar incluir a classe $class, verifique o nome correto! ";
            }
        }
    }
    public function helper (){}
    
        public function functions($p) {
        $param = explode(',', $p);
        foreach ($param as $list) {
            if (file_exists(SYSTEM . 'functions/' . $list . '.php')) {
                include_once SYSTEM . 'functions/' . $list . '.php';
            } else {
                echo 'O arquivo da Função ' . $list . ' não existe';
            }
        }
  
    }
}
