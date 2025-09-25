<?php foreach ($parametro as $p) { ?>
<tr>
    <td>
        <form action="/projeto/proprietario/alterar" method="post">
            <input type="hidden" name="proprietario_id" value="<?= $p['proprietario_id']; ?>">
            <label>Nome:</label>
            <input type="text" name="proprietario" value="<?= $p['proprietario']; ?>">
            <br>
            <label>Email:</label>
            <input type="text" name="email" value="<?= $p['email']; ?>">
            <br>
            <label>Numero de telefone:</label>
            <input type="text" name="numero_telefone" value="<?= $p['numero_telefone']; ?>">
            <br>
            <label>CPF/CNPJ:</label>
            <input type="text" name="CPF_CNPJ" value="<?= $p['CPF_CNPJ']; ?>">
            <br>
            <label>Endereço de cobrança:</label>
            <input type="text" name="endereço_cobrança" value="<?= $p['endereço_cobrança']; ?>">
            <br>
            <input type="submit" value="alterar" class="buton">
        </form>
    </td>
</tr>
<?php } ?>