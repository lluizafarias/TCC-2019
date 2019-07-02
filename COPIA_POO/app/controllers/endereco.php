<?php/
    require __DIR__."/../models/Usuario.php";

    function salvar_endereco(){

        $uf = $_POST['uf'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];

        $end = new Endereco();
        $end->salvar_endereco($uf,$cidade,$bairro,$rua,$numero);

        }