<?php

namespace generic;

class Controller
{
    private $arrayChamadas = [];
    public function __construct()
    {
        $this->arrayChamadas = [
            "usuario/listar" => new Acao("Usuario", "listar"),
            "usuario/formulario" => new Acao("Usuario", "formulario"),
            "usuario/formularioalternar" => new Acao("Usuario", "alternarform"),
            "usuario/inserir" => new Acao("Usuario", "inserir")
        ];
    }

    public function verificarChamadas($rota)
    {
        if (isset($this->arrayChamadas[$rota])) {
            $acao = $this->arrayChamadas[$rota];
            $acao->executar();
            return;
        }
        echo "Rota não existe!";
    }
}