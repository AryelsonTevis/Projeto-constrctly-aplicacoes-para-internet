<link rel="stylesheet" href="/projeto/assets/css/tabelas.css">
<h2 class="title">Comodos</h2>
<div class="button-container">
    <a class="button-cadastrar" href="/projeto/comodo/formulario?id=<?= $_GET['id']?>">Cadastrar</a>
    <a class="button-exit" href="/projeto/casa/listarcasa?id=<?php echo $_SESSION['id_proprietario'] ?>">Voltar</a>
</div>


<table class="tabela">
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
        <td> <?= $p["id_comodo"] ?></td>
        <td><?= $p["comodo"] ?></td>
        <td><?= $p["area"] ?></td>
        <td>
            <?php if ($p["progresso"] == null) {?>
            <a  href="/projeto/comodo/inserirpor?id=<?php echo $p['id_comodo']; ?>&id_casa=<?php echo $_GET['id']?>">clique
            </a>
            <?php }?>
            <?= $p["progresso"] ?>

        </td>

        <?php  if ($p["progresso"] != null){?>
        <td>
            <a class="self-acoes" href="/projeto/comodo/formularioalterar?id=<?php echo $p['id_comodo']; ?>">Alterar</a>
        <?php } ?>

        <a class="self-acoes" href="/projeto/comodo/apagar?comodo_id=<?php echo $p['id_comodo'];  ?>&id=<?php echo $_GET['id'] ?>">Apagar</a></td>

    </tr>
    <?php
    } ?>

</table>