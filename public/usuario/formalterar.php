<?php foreach ($parametro as $p) { ?>
<tr>
    <td>
        <form action="/projeto/usuario/alterar" method="post">
            <input type="hidden" name="usuario_id" value="<?= $p['usuario_id']; ?>">

            <input type="text" name="nome" value="<?= $p['nome']; ?>">
            <br>
            <input type="text" name="email" value="<?= $p['email']; ?>">
            <br>
            <input type="text" name="numero_telefone" value="<?= $p['numero_telefone']; ?>">
            <br>
            <input type="text" name="CPF_CNPJ" value="<?= $p['CPF_CNPJ']; ?>">
            <br>
            <input type="password" name="senha" value="<?= $p['senha']; ?>">
            <br>
            <input type="text" name="endereço_cobrança" value="<?= $p['endereço_cobrança']; ?>">
            <br>
            <input type="submit" value="alterar" class="buton">
        </form>
    </td>
</tr>
<?php } ?>