<?php foreach ($parametro as $p) { ?>
<tr>
    <td>
        <form action="/projeto/casa/alterar" method="post">

            <input type="hidden" name="casa_id" value="<?= $p['casa_id']; ?>">


            <label>Bairro:</label>
            <input type="text" name="bairro" value="<?= $p['bairro']; ?>">
            <br>
            <label>Metros:</label>
            <input type="text" name="metros" value="<?= $p['metros']; ?>">
            <br>
            <label>Quantidade de comodos:</label>
            <input type="text" name="comodos" value="<?= $p['quantidade_comodos']; ?>">
            <br>
            <label>Valor estimado: R$</label>
            <input type="text" name="valor" value="<?= $p['valor_estimado']; ?>">
            <br>


            <input type="submit" value="alterar" class="buton">
        </form>
    </td>
</tr>
<?php } ?>