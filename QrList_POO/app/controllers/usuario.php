<?php
/**
 * Created by PhpStorm.
 * User: Luiza Farias
 * Date: 13/06/2019
 * Time: 20:36
 */

    require_once ("../models/Usuario.php");

    function index(){

        require_once ("../../index.php");

    }

    function cadastrar(){

        require __DIR__."../views/cadastro_usuario.php";

    }

    function salvar(){

    $primeiro_nome = filter_input(INPUT_POST, 'primeiro_nome',FILTER_SANITIZE_SPECIAL_CHARS );
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

//    VER DEPOIS
//    $confirmar_senha = $_POST['confirmar_senha'];


//    echo $primeiro_nome.", ".$sobrenome.", ".$cpf.", ".$telefone.", ".$email.", ".$senha.", ".$confirmar_senha;
    $user = new Usuario();
    $user->salvar($primeiro_nome, $sobrenome, $cpf, $telefone, $email, $senha);

    index();

    }

