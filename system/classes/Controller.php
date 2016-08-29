<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author Fábio
 */
class Controller extends Config{
   
    public function __construct() {
        parent::__construct();
       
    }
  
    protected function view($nome,$vars = null){
       if(is_array($vars) && count($vars > 0)){
           extract($vars, EXTR_PREFIX_ALL,'view');
       }
        $error = BASEPATH.'errors/404error.php';
        
            $filename = APP.'view/'.$nome.'.php';
                    
            if(file_exists($filename)){
            require_once($filename) ;
            }else{
                require_once ($error);
            }
    }
            
    
   
}
