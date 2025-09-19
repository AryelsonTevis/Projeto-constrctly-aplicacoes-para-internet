<?php

namespace template;

use template\ITemplate;

class UsuarioTemp implements ITemplate
{
    public function cabecalho()
    {   
        echo '<link rel="stylesheet" href="/Projeto/assets/css/global.css">';
        echo "<nav>Cabeçalho</nav>";
         echo "<main>";
    }
    
    public function rodape()
    {   echo "</main>";
        echo "<footer>Rodapé</footer>";
    }
    public function layout($caminho, $parametro = null)
    {
        $this->cabecalho();
        include $_SERVER["DOCUMENT_ROOT"]."\\Projeto".$caminho;
    
        $this->rodape();
    }
}