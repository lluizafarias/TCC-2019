<html>

    <body>

        <form method="post" action="../controllers/endereco.php?acao=salvar_endereco">

            <br><br>
            <div class="field">
                    <label>Rua</label>
                    <input name="rua" id="rua" type="text" placeholder="Ex: AVENIDA PAULISTA">
            </div>
            <br><br>

            <div class="field">
                    <label>Numero</label>
                    <input name="numero" id="numero" type="text" placeholder="Ex: 000">
            </div>
                <br><br>
            <div class="field">
                    <label>Bairro</label>
                    <input name="bairro" id="bairro" type="text" placeholder="Ex: PARQUE GUARANI">
            </div>
                <br><br>
            <div class="field">
                    <label>Cidade</label>
                    <input name="cidade" id="cidade" type="text" placeholder="Ex: JOINVILLE">
            </div>
                <br><br>
            <div class="field">
                    <label>Estado</label>
                    <input name="estado" id="estado" type="text" placeholder="Ex: BAHIA ">
            </div>

            <br><br>
            <button type="submit" class="ui fluid large teal submit button bg_secundario">Cadastrar</button>

        </form>
    </body>
</html>