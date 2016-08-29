<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexao
 *
 * @author Fábio
 */
class Conexao {
    # Variável que guarda a conexão PDO.

    protected static $db;
    private $_dataname;
    public $table;
    public $sql;
    public $row;

    # Private construct - garante que a classe só possa ser instanciada internamente.

    public function __construct() {
        # Informações sobre o banco de dados:
        $this->db_host =    'localhost';
        $this->_dataname = 'test';
        $this->db_usuario = 'root';
        $this->db_senha = '';
        $this->db_driver = 'mysql';
       
    }

    # Método estático - acessível sem instanciação.

    public function conexao($sql) {
        $conn = new PDO("mysql:host=$this->db_host;dbname={$this->_dataname}", $this->db_usuario, $this->db_senha)or die('Erro ao tentar conectar no banco de dados');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $result = $conn->query($sql);
        $row = $result->fetchAll(PDO::FETCH_OBJ);
        return $row;
    }
}
