<?php

 require_once ("../conexao/Conexao.php");

class Usuario
{
    public $cpf;
    public $primeiro_nome;
    public $sobrenome;
    public $telefone;
    public $email;
    public $senha;
    public $tipoUsuario; //1 para comum 2 para admin

    public $conexao;

    public function __construct(){

        $this->tipoUsuario = 1;
        $conexao_objeto = new Conexao();

        //o atributo $this->conexao agora sabe como se
        // comunicar com o banco de dados
        $this->conexao = $conexao_objeto->getConnection();

    }

    public function salvar($primeiro_nome, $sobrenome, $cpf, $telefone, $email, $senha){

            $sql = "insert into usuario(primeiro_nome, sobrenome, cpf, telefone, email, senha) values ($primeiro_nome, $sobrenome, $cpf, $telefone, $email, $senha)";
        $resultado = $this->conexao->exec($sql);

        return $resultado;

    }

}

