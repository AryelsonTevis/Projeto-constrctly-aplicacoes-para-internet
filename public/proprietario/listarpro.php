<a href="/trabalho_patrick/proprietario/formulario">Cadastrar</a>
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
                <?= $p["proprietario_id"] ?>
            </td>

            <td>
                <?= $p["proprietario"] ?>
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

            <td><a href="
    /trabalho_patrick/proprietario/formulrioalterar?id=<?php echo $p['proprietario_id']; ?>">alterar</a>
            </td>
            <td><a href="/trabalho_patrick/proprietario/apagar?id=<?php echo $p['proprietario_id']; ?>">apagar</a></td>
            <td><a href="/trabalho_patrick/proprietario/listarid?id=<?php echo $p['proprietario_id']; ?>">casas</a></td>

        </tr>
    <?php
    } ?>






</table>