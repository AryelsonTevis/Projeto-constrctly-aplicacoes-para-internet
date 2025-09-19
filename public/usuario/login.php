<form action="/projeto/usuario/logar" method="post">




    <label>Email:</label>
    <input type="text" name="email" value="<?= ($parametro != null) ? $parametro[0]["email"] : "" ?>" />
    <br />

    <label>Senha:</label>
    <input type="password" name="senha" value="<?= ($parametro != null) ? $parametro[0]["senha"] : "" ?>" />
    <br />


    <input type="submit" value="Enviar">

</form>
<div class="button-container">
    <a href="/projeto/usuario/formulario" class="button-cadastrar">Cadastrar</a>
</div>