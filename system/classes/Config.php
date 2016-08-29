<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Config
 *
 * @author Fábio
 */
class Config{

    private $_url;
    public $_expode;
    public $_controle;
    public $_action;
    public $_param;
    public $load;
    

    public function __construct() {
        $this->get_url();
        $this->setExplode();
        $this->setControle();
        $this->setAction();
        $this->setParams();
        $this->loading();
        
        
    }

    private function get_url() {
        $this->_url = (isset($_GET['url']) != null) ? $_GET['url'] : null;
    }

    private function setExplode() {
        $this->_expode = explode('/', $this->_url);
        //return $this->_expode;
    }

    public function setControle() {
        $this->_controle = (!isset($this->_expode[0]) || $this->_expode[0] == null)?'home':$this->_expode[0];
        return $this->_controle;
    }

    private function setAction() {
        $ac = (!isset($this->_expode[1]) || $this->_expode[1] == null || $this->_expode[1] == "index") ? 'index' : $this->_expode[1];
        $this->_action = $ac;
        return $this->_action;
    }

    private function setParams() {
        $par = $this->_expode;
         $ind = array();
            $value = array();
        unset($par[0], $par[1]);
        if (end($par) == null)
            array_pop($par);
        $i = 0;
        if (!empty($par)) {
            foreach ($par as $val) {
                if ($i % 2 == 0) {
                    $ind[] = $val;
                } else {
                    $value[] = $val;
                }
                $i++;
            }
        } 
        if (count($ind) == count($value) && !empty($ind) && !empty($value)) {
            $this->_param = array_combine($ind, $value);
        } else {
            $this->_param = array();
        }
    }

    public function getParam($name) {
        if(isset($this->_param[$name])!= null){
        return $this->_param[$name];
        }else{
            
        }
        
    }
    
  
    public function run() {
        
        $controle = APP.'controle/'. ucfirst($this->_controle).'_controle.php';
        
        if(!file_exists($controle)){
            echo 'O controle '. ucfirst($this->_controle).' não existe';
        }else{
            require_once ($controle);
           $class = ucfirst($this->_controle);
            $action = $this->_action;
           
            $app = new $class();
            
            if(method_exists($class, $action)){
                $app->$action();
            }else{
                echo "Metodo $action não encontrado";
            }
           
       }
        
     
   
        
    }
    
    public function loading() {
        $this->load = new Load();
        
    }
//dashboard/controller/Controle_d.php
//dashboard/controller/Controle_d.php
}
