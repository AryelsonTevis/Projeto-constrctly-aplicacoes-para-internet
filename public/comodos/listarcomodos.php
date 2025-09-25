<a href="/projeto/comodo/formulario?id=<?= $_GET['id']?>">Cadastrar</a>


<table>
    <tr>
        <th>ID</th>
        <th>comodos</th>
        <th>area</th>
        <th>progresso</th>
        <th>Ações</th>

    </tr>
    <?php foreach ($parametro as $p) {

    ?>
    <tr>
        <td>
            <?= $p["id_comodo"] ?>
        </td>

        <td>
            <?= $p["comodo"] ?>
        </td>
        <td>
            <?= $p["area"] ?>
        </td>
        <td>
            <?php if ($p["progresso"] == null) {?>
            <a href="/projeto/comodo/inserirpor?id=<?php echo $p['id_comodo']; ?>&id_casa=<?php echo $_GET['id']?>">clique
            </a>
            <?php }?>
            <?= $p["progresso"] ?>

        </td>

        <?php  if ($p["progresso"] != null){?>
        <td><a href="/projeto/comodo/formularioalterar?id=<?php echo $p['id_comodo']; ?>">alterar</a>
        </td>
        <?php } ?>




        <td><a
                href="/projeto/comodo/apagar?comodo_id=<?php echo $p['id_comodo'];  ?>&id=<?php echo $_GET['id'] ?>">apagar</a>
        </td>


    </tr>
    <?php
    } ?>

</table><a href="/projeto/casa/listarcasa?id=<?php echo $_SESSION['id_proprietario'] ?>">Voltar</a>