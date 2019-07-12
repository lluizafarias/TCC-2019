<?php

    function index(){
        require __DIR__."/../views/home.php";

    }
    require __DIR__."/../models/Usuario.php";


    function cadastrar_usuario(){
        require __DIR__."/../views/usuario_cadastro.php";
    }

    function salvar_usuario(){

        $primeiro_nome = filter_input(INPUT_POST, 'primeiro_nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $sobrenome = $_POST['sobrenome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $user = new Usuario();
        $user->salvar_usuario($primeiro_nome, $telefone, $sobrenome, $senha, $cpf, $email);

        index();
    }

    function editar(){

        $user = new Usuario();
        $dados_user = $user->getUserById($_GET['id']);

        require __DIR__."/../views/usuario_editar.php";
    }

    function atualizar(){

        $id    = $_POST['id'];
        $nome  = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $user = new Usuario();
        $user->update($id, $nome, $email, $senha);

        index();
    }

    function excluir(){
        $user = new Usuario();
        $user->delete($_GET['id']);

        index();
    }


    if (isset($_GET['acao']) and function_exists($_GET['acao']) ){
        call_user_func($_GET['acao']);
    }else {
        index();
    }




