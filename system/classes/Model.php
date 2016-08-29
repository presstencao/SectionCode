<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author Fábio
 */
class Model extends Conexao {
    # Variável que guarda a conexão PDO.
    public $_table;
    public function read($where = null,$limit = null,$offiset = null) {
        $where = ($where != null)?"WHERE {$where}":'';
        
        $sql = "SELECT * FROM $this->_table $where";
       return $this->conexao($sql);
      
    }

    public function insert() {
        
    }

    public function delet() {
        
    }

    public function update() {
        
    }

}
