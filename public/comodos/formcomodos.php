<form action="/projeto/comodo/inserir" method="post">
    <?php
    if ($parametro != null) {
    ?>
    <input type="hidden" name="id_comodo" value="<?= $parametro[0]["id_comodo"] ?>" />


    <?php 
    }
 
    ?>
    



    <label>Comodo:</label>
    <input type="text" name="comodo" value="<?= ($parametro != null) ? $parametro[0]["comodo"] : "" ?>" />
    <br />


    <label>Área:</label>
    <input type="text" name="area" value="<?= ($parametro != null) ? $parametro[0]["area"] : "" ?>" />


    <br />


    <input type="submit" value="Enviar">

</form>