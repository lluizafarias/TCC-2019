<?php
/**
 * Created by PhpStorm.
 * User: Luiza Farias
 * Date: 13/06/2019
 * Time: 20:29
 */
?>

<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>QrList</title>
    <link rel="stylesheet" type="text/css" href="../../semantic/dist/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="../../semantic/dist/semantic.min.js"></script>

<body>
<div class="ui grid">
    <div class="row">
        <div class="four wide column"></div>
        <div class="eight wide column">
            <div class="ui middle aligned aligned grid">

                <div class="column">
                    <h2 class="ui teal image header">
                        <!--                                <img src="assets/images/logo.png" class="image">-->
                        <div class="content cor_secundaria">
                            Criar conta!
                        </div>
                    </h2>

                    <form class="ui large form" method="post" action="../controllers/usuario.php?acao=salvar_usuario">
                        <div class="ui stacked segment">

                            <div class="field">
                                <label>Primeiro nome</label>
                                <input name="primeiro_nome" id="primeiro_nome" type="text" placeholder="Ex: Ivo">
                            </div>

                            <div class="field">
                                <label>Sobrenome</label>
                                <input name="sobrenome" id="sobrenome" type="text" placeholder="Ex: Reigel">
                            </div>

                            <div class="field">
                                <label>CPF</label>
                                <input name="cpf" id="cpf" type="text" placeholder="Ex: ***.***.***-**">
                            </div>

                            <div class="field">
                                <label>Telefone</label>
                                <input name="telefone" id="telefone" type="text" placeholder="Ex: (**)****-***">
                            </div>

                            <div class="field">
                                <label>E-mail</label>
                                <input name="email" id="email" type="text" placeholder="Ex: ivoreigel@gmail.com">
                            </div>

                            <div class="field">
                                <label>Senha</label>
                                <input name="senha" id="senha" placeholder="Ex: ******" type="password">
                            </div>

                            <div class="field">
                                <label>Confirmar Senha</label>
                                <input name="confirmar_senha" id="confirmar_senha" placeholder="Ex: ******" type="password">
                            </div>

                            <button type="submit" class="ui fluid large teal submit button bg_secundario">Cadastrar</button>
                        </div>

                        <div class="ui error message"></div>

                    </form>
                </div>
            </div>
            <div class="four wide column"></div>
        </div>
    </div>
</div>
</body>
</html>

