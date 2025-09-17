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
            "usuario/formularioalterar" => new Acao("Usuario", "alterarForm"),
            "usuario/inserir" => new Acao("Usuario", "inserir"),
            "usuario/alterar" => new Acao("Usuario", "alterar"),
            "usuario/apagar" => new Acao("Usuario", "apagar"),
            "usuario/listarproprietarios" => new Acao("Usuario", "listarProprietarios")


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