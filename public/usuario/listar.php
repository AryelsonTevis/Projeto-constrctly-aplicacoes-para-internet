<a href="/trabalho_patrick/usuario/formulario">Cadastrar</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>telefone</th>
        <th>CPF/CNPJ</th>
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
            <?= $p["email"] ?>
        </td>
        <td>
            <?= $p["numero_telefone"] ?>
        </td>
        <td>
            <?= $p["CPF_CNPJ"] ?>
        </td>
        <td>
            <?= $p["endereço_cobrança"] ?>
        </td>

        <td><a href="/trabalho_patrick/usuario/formularioalterar?id=<?php echo $p['usuario_id']; ?>">alterar</a></td>
        <td><a href="/trabalho_patrick/usuario/apagar?id=<?php echo $p['usuario_id']; ?>">apagar</a></td>
        <td><a href="/trabalho_patrick/usuario/proprietarios?id=<?php echo $p['usuario_id']; ?>">Proprietarios</a></td>

    </tr>
    <?php
    } ?>






</table>