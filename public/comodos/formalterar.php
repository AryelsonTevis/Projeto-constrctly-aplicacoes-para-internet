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
            <input type="submit" value="alterar" class="buton">
        </form>
    </td>
</tr>
<?php } ?>