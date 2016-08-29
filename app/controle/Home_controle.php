<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author Fábio
 */
class Home extends Controller{
    
    
    public function __construct() {
        parent::__construct();
        $this->load->functions('base_url');
            
        
    }
    public function index(){
       
       $this->view('welcome');
    }
}
