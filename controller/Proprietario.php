<?php

namespace controller;

use service\proprietarioService;

use template\UsuarioTemp;
use template\ITemplate;

class Proprietario
{


    private ITemplate $template;
    public function __construct()
    {
        $this->template = new UsuarioTemp();
    }
    public function listarid()
    {
        $id = $_GET['id'];
        $service = new ProprietarioService();
        $resultado = $service->listarId($id);

        $this->template->layout("\\public\\usuario\\listarpro.php", $resultado);
    }
    public function inserir()
    {

        $nome = $_POST["proprietario"];

        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $cpf = $_POST["cpf"];
        $endereco = $_POST["endereço_cobrança"];
        $service = new ProprietarioService();
        $resultado = $service->inserir($nome, $email, $telefone, $cpf, $endereco);
        header("location: /trabalho_patrick/proprietario/listarpro?info=1");
    }
    public function formulario()
    {

        $this->template->layout("\\public\\proprietario\\formproprietario.php");
    }
}
