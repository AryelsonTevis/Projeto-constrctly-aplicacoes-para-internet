<form action="/trabalho_patrick/proprietario/inserir" method="post">
    <?php
    if ($parametro != null) {
    ?>
        <input type="hidden" name="proprietario_id" value="<?= $parametro[0]["proprietario_id"] ?>" />
    <?php
    }
    ?>
    <input type="hidden" name="usuario_id" value="<?= $p['fk_usuarios']; ?>">


    <label>Nome:</label>
    <input type="text" name="proprietario" value="<?= ($parametro != null) ? $parametro[0]["proprietario"] : "" ?>" />
    <br />


    <label>Email:</label>
    <input type="text" name="email" value="<?= ($parametro != null) ? $parametro[0]["email"] : "" ?>" />
    <br />
    <label>Numero de telefone:</label>
    <input type="text" name="telefone" value="<?= ($parametro != null) ? $parametro[0]["numero_telefone"] : "" ?>" />
    <br />
    <label>CPF:</label>
    <input type="text" name="cpf" value="<?= ($parametro != null) ? $parametro[0]["CPF_CNPJ"] : "" ?>" />

    <br />
    <label>Endereço:</label>
    <input type="text" name="endereço_cobrança"
        value="<?= ($parametro != null) ? $parametro[0]["endereço_cobrança"] : "" ?>" />
    <br />

    <input type="submit" value="Enviar">

</form>