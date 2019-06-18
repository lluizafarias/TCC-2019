<?php

class Conexao
{
    public $connection;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=tcc;", "root", "");
    }

    /**
     * @return PDO
     */

    public function getConnection()
    {
        return $this->connection;
    }
}


//Teste
//$conexao = new Conexao();
//$conexao->getConnection();