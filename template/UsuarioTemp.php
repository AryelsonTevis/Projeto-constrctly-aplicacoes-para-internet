<?php

namespace template;

use template\ITemplate;

class UsuarioTemp implements ITemplate
{
    public function cabecalho()
    {
        echo "<div>Cabeçalho</div>";
    }
    public function rodape()
    {
        echo "<div>Rodapé</div>";
    }
    public function layout($caminho, $parametro = null)
    {
        $this->cabecalho();

        include $_SERVER["DOCUMENT_ROOT"] . "\\trabalho_patrick" . $caminho;
        $this->rodape();
    }
}
