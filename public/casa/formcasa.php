<form action="/projeto/casa/inserir" method="post">
    <?php
    if ($parametro != null) {
    ?>
    <input type="hidden" name="casa_id" value="<?= $parametro[0]["casa_id"] ?>" />



    <?php
    }
 
    ?>




    <label>Bairro:</label>
    <input type="text" name="bairro" value="<?= ($parametro != null) ? $parametro[0]["bairro"] : "" ?>" />
    <br />


    <label>Metros:</label>
    <input type="text" name="metros" value="<?= ($parametro != null) ? $parametro[0]["metros"] : "" ?>" />
    <br />
    <label>Quantidade comodos:</label>
    <input type="text" name="comodos" value="<?= ($parametro != null) ? $parametro[0]["quantidade_comodos"] : "" ?>" />
    <br />
    <label>Valor R$:</label>
    <input type="text" name="valor" value="<?= ($parametro != null) ? $parametro[0]["valor_estimado"] : "" ?>" />

    <br />


    <input type="submit" value="Enviar">

</form>