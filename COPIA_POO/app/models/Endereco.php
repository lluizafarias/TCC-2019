<?php
/**
 * Created by PhpStorm.
 * User: Luiza Farias
 * Date: 19/06/2019
 * Time: 14:03
 */

require __DIR__."/../conexao/Connection.php";


class Endereco{

    public $uf;
    public $cidade;
    public $bairro;
    public $rua;
    public $numero;
    public $tipoEnd; //1 usuario 2 ppara mercado

    public $conexao_endereco;

    public function __construct(){

        $this->tipoEnd= 1;
        $conexao_objeto = new Connection();

        //o atributo $this->conexao agora sabe como se
        // comunicar com o banco de dados
        $this->conexao_endereco = $conexao_objeto->conectar();


    }


    public function salvar_endereco($uf, $cidade, $bairro, $rua, $numero){

        $sql_uf = "insert into uf(nome_uf) value ('$uf')";
        $resultado_uf = $this->conexao_endereco->exec($sql_uf);

        $sql_cidade = "insert into cidade(nome_cidade) value ('$cidade')";
        $resultado_cidade = $this->conexao_endereco->exec($sql_cidade);

        $sql_bairro = "insert into bairro(nome_bairro) value ('$bairro')";
        $resultado_bairro = $this->conexao_endereco->exec($sql_bairro);

        $sql_endereco = "insert into endereco(rua, numero) value ('$rua','$numero')";
        $resultado_endereco = $this->conexao_endereco->exec($sql_endereco);

//
//          APARENTEMENTE NÃO DA PARA RETORNAR MAIS DE UM VAOR A NAO SER COM ARRAY
            return $resultado_uf.$resultado_cidade.$resultado_bairro.$resultado_endereco;

    }

}