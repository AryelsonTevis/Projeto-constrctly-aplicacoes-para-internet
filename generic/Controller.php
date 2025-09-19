<<<<<<< HEAD
<?php

namespace generic;

class Controller
{
    private $arrayChamadas = [];
    public function __construct()
    {
        $this->arrayChamadas = [
            "usuario/listar" => new Acao("Usuario", "listar"),
            "usuario/listarid" => new Acao("Usuario", "listarid"),
            "usuario/listarpro" => new Acao("Usuario", "listarpro"),
            "usuario/formulario" => new Acao("Usuario", "formulario"),
            "usuario/formularioalterar" => new Acao("Usuario", "alterarForm"),
            "usuario/inserir" => new Acao("Usuario", "inserir"),
            "usuario/alterar" => new Acao("Usuario", "alterar"),
            "usuario/apagar" => new Acao("Usuario", "apagar"),
            "proprietario/listar" => new Acao("Proprietario", "listar"),
            "proprietario/listarid" => new Acao("Proprietario", "listarid"),
            "proprietario/formulario" => new Acao("Proprietario", "formulario"),
            "proprietario/inserir" => new Acao("Proprietario", "inserir"),
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
?>
=======
<?php

namespace generic;

class Controller
{
    private $arrayChamadas = [];
    public function __construct()
    {
        $this->arrayChamadas = [
            "login" => new Acao("Usuario", "logar"),
            "usuario/listar" => new Acao("Usuario", "listar"),
            "usuario/listarid" => new Acao("Usuario", "listarid"),
            "usuario/listarpro" => new Acao("Usuario", "listarpro"),
            "usuario/formulario" => new Acao("Usuario", "formulario"),
            "usuario/formularioalterar" => new Acao("Usuario", "alterarForm"),
            "usuario/inserir" => new Acao("Usuario", "inserir"),
            "usuario/alterar" => new Acao("Usuario", "alterar"),
            "usuario/apagar" => new Acao("Usuario", "apagar"),

            "proprietario/listar" => new Acao("Proprietario", "listar"),
            "proprietario/listarid" => new Acao("Proprietario", "listarid"),
            "proprietario/formulario" => new Acao("Proprietario", "formulario"),
            "proprietario/inserir" => new Acao("Proprietario", "inserir")


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
>>>>>>> 84aa5acded28c0dbe5e374f93d96af76e04d65d4
