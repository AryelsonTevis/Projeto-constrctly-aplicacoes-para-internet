<?php foreach ($parametro as $p) { ?>
<tr>
    <td>
        <form action="/projeto/comodo/alterar" method="post">
            <input type="hidden" name="id_comodo" value="<?= $p['id_comodo']; ?>">


            <label>Comodo:</label>
            <input type="text" name="comodo" value="<?= $p['comodo']; ?>">
            <br>
            <label>Área:</label>
            <input type="text" name="area" value="<?= $p['area']; ?>">
            <br>
            <label>Progresso:</label>
            <input type="text" name="progresso" value="<?= $p['progresso']; ?>">
            <br>
            <div>
                <a class="button-voltar" href="/projeto/comodo/voltar">Voltar</a>
                <input class="button-enviar" type="submit" value="Alterar" class="buton">
            </div>

        </form>
    </td>
</tr>
<?php } ?>