<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 24/10/18
 * Time: 12:18
 */

require __DIR__."/../conexao/Connection.php";

class Resenha{

    //  --- ATRIBUTOS DA CLASSE ---
    public $id;
    public $titulo;
    public $resenha;

    public $conexao;


    //  --- RELACÃO COM A CLASSE CONEXÃO    ---
    public function __construct(){

        $this->id = 1;
        $conexao_objeto = new Connection();

        $this->conexao = $conexao_objeto->getConnection();

    }

    // --- FUNÇÃO QUE RETORNA TODAS AS RESENHAS DO BANCO    ---
    public function todos(){
        return $this->conexao->query("select * from resenha")->fetchAll(PDO::FETCH_ASSOC);

    }


    //  --- RETORNA A RESENHA ATRAVÉS DE SEU ID ---
    public function getUserById(int $id){
        $user = $this->conexao->query("select * from resenha where id = {$id}")->fetch(PDO::FETCH_ASSOC);

        return $user;
    }


}

$a= new Resenha();
print_r($a->todos());

$b= new Resenha();
print_r($b->getUserById(1));