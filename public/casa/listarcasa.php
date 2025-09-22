<a href="/projeto/casa/formulario?id=">Cadastrar</a>
<table>
    <tr>
        <th>ID</th>
        <th>Bairro</th>
        <th>Metros</th>
        <th>Comodos</th>
        <th>EstimativaR$</th>

        <th>Ações</th>

    </tr>
    <?php foreach ($parametro as $p) {

    ?>
    <tr>
        <td>
            <?= $p["casa_id"] ?>
        </td>

        <td>
            <?= $p["bairro"] ?>
        </td>
        <td>
            <?= $p["metros"] ?>
        </td>
        <td>
            <?= $p["quantidade_comodos"] ?>
        </td>
        <td>
            <?= $p["valor_estimado"] ?>
        </td>


        <td><a href="/projeto/casa/formulrioalterar?id=<?php echo $p['casa_id']; ?>">alterar</a>
        </td>
        <td><a href="/projeto/casa/apagar?id=<?php echo $p['casa_id']; ?>">apagar</a></td>
        <td><a href="/projeto/casa/listarcomodo?id=<?php echo $p['casa_id']; ?>">comodos</a></td>

    </tr>
    <?php
    } ?>
</table>