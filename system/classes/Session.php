<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Session
 *
 * @author Fábio
 */
class Session {
    //put your code here
    public $_sessionID;
    public $_sessionData;
    public function __construct() {
        session_start();
        
    }
    
    public function sessionID(){
         return $this->_sessionID = session_id();
    }
    
    public function sessionCreate($param) {
      $_SESSION['session_id'] = session_id();
        $this->_sessionData = $param;
        $_SESSION['data'] = $this->_sessionData;
        
    }
    public function sessionDestroy() {
        
        session_regenerate_id($this->_sessionID);
        session_destroy();
     
    }
}
