<a href="/trabalho_patrick/usuario/formulario">Cadastrar</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($parametro as $p) {
    ?>
    <tr>
        <td>
            <?= $p["usuario_id"] ?>
        </td>
        <td>
            <?= $p["nome"] ?>
        </td>
        <td>
            <?= $p["endereço_cobrança"] ?>
        </td>
        <td><a href="/trabalho_patrick/usuario/formularioalterar?id=<? echo $p['usuario_id']; ?>">alterar</a></td>

    </tr>
    <?php
    } ?>






</table>