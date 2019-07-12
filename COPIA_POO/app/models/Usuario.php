<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 19/09/2018
 * Time: 10:48
 */

require __DIR__."/../conexao/Connection.php";

class Usuario {

    //ATRIBUTOS DA CLASSE
    public $cpf;
    public $primeiro_nome;
    public $sobrenome;
    public $telefone;
    public $email;
    public $senha;
    public $tipoUsuario; //1 para comum e 2 para admin

    public $conexao_usuario;

    //COMPORTAMENTOS
    public function __construct(){
        $this->tipoUsuario = 1;
        $conexao_objeto = new Connection();

        //o atributo $this->conexao agora sabe como se
        // comunicar com o banco de dados
        $this->conexao_usuario = $conexao_objeto->conectar();
    }
//
//    public function exibe (){
//        echo "usuario {$this->nome} foi criado com o tipo {$this->tipoUsuario} e id {$this->id} \n";
//    }
//
//    public function todos(){
//        return $this->conexao->query("select * from usuario")->fetchAll(PDO::FETCH_ASSOC);
//    }
//
//    public function getUserById(int $id){
//        $user = $this->conexao->query("select * from usuario where id = {$id}")->fetch(PDO::FETCH_ASSOC);
//
//        return $user;
//    }

        public function salvar_usuario($primeiro_nome, $telefone, $sobrenome, $senha, $cpf, $email){

            $sql_resultado = "insert into usuario(primeiro_nome, telefone, sobrenome, senha, cpf, email, cod_tip_usu_codDDDDDdddDD/][=z]) values ('$primeiro_nome', '$telefone', '$sobrenome', '$senha', '$cpf', '$email', 1)";
            $resultado_usuario = $this->conexao_usuario->exec($sql_resultado);
            return $resultado_usuario;
        }


        public function update($id, $nome, $email, $senha){

            $sql = "update usuario set nome='$nome', email='$email', senha='$senha' WHERE id=$id";
            $resultado = $this->conexao_usuario->exec($sql);

            return $resultado;
        }

        public function delete($id){
            $sql = "delete from usuario where id=$id";
            $this->conexao_usuario->exec($sql);
        }
}