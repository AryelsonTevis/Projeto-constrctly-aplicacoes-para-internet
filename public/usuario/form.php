<<<<<<< HEAD
<form action="/projeto/usuario/inserir" method="post">
    <?php
    if ($parametro != null) {
    ?>
        <input type="hidden" name="usuario_id" value="<?= $parametro[0]["usuario_id"] ?>" />
    <?php
    }
    ?>
    <label>Nome:</label>
    <input type="text" name="nome" value="<?= ($parametro != null) ? $parametro[0]["nome"] : "" ?>" />
    <br />


    <label>Email:</label>
    <input type="text" name="email" value="<?= ($parametro != null) ? $parametro[0]["email"] : "" ?>" />
    <br />
    <label>Numer de telefone:</label>
    <input type="text" name="telefone" value="<?= ($parametro != null) ? $parametro[0]["numero_telefone"] : "" ?>" />
    <br />
    <label>CPF:</label>
    <input type="text" name="cpf" value="<?= ($parametro != null) ? $parametro[0]["CPF_CNPJ"] : "" ?>" />
    <br />
    <label>Senha:</label>
    <input type="password" name="senha" value="<?= ($parametro != null) ? $parametro[0]["senha"] : "" ?>" />
    <br />
    <label>Endereço:</label>
    <input type="text" name="endereço_cobrança"
        value="<?= ($parametro != null) ? $parametro[0]["endereço_cobrança"] : "" ?>" />
    <br />

    <input type="submit" value="Enviar">

=======
<form action="/trabalho_patrick/usuario/inserir" method="post">
    <?php
    if ($parametro != null) {
    ?>
        <input type="hidden" name="usuario_id" value="<?= $parametro[0]["usuario_id"] ?>" />
    <?php
    }
    ?>
    <label>Nome:</label>
    <input type="text" name="nome" value="<?= ($parametro != null) ? $parametro[0]["nome"] : "" ?>" />
    <br />


    <label>Email:</label>
    <input type="text" name="email" value="<?= ($parametro != null) ? $parametro[0]["email"] : "" ?>" />
    <br />
    <label>Numer de telefone:</label>
    <input type="text" name="telefone" value="<?= ($parametro != null) ? $parametro[0]["numero_telefone"] : "" ?>" />
    <br />
    <label>CPF:</label>
    <input type="text" name="cpf" value="<?= ($parametro != null) ? $parametro[0]["CPF_CNPJ"] : "" ?>" />
    <br />
    <label>Senha:</label>
    <input type="password" name="senha" value="<?= ($parametro != null) ? $parametro[0]["senha"] : "" ?>" />
    <br />
    <label>Endereço:</label>
    <input type="text" name="endereço_cobrança"
        value="<?= ($parametro != null) ? $parametro[0]["endereço_cobrança"] : "" ?>" />
    <br />

    <input type="submit" value="Enviar">

>>>>>>> 84aa5acded28c0dbe5e374f93d96af76e04d65d4
</form>