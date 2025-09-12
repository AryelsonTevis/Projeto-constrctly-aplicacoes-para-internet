<?php

namespace controller;

use service\UsuarioService;
use template\UsuarioTemp;
use template\ITemplate;

class Usuario
{
    private ITemplate $template;
    public function __construct()
    {
        $this->template = new UsuarioTemp();
    }

    public function listar()
    {
        $service = new UsuarioService();
        $resultado = $service->listarUsuario();
        $this->template->layout("\\public\\usuario\\listar.php", $resultado);
    }
    public function inserir()
    {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $cpf = $_POST["cpf"];
        $senha = $_POST["senha"];
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
        $endereco = $_POST["endereço_cobrança"];
        $service = new UsuarioService();
        $resultado = $service->inserir($nome, $email, $telefone, $cpf, $senha_hash, $endereco);
        header("location: /trabalho_patrick/usuario/lista?info=1");
    }
    public function formulario()
    {

        $this->template->layout("\\public\\usuario\\form.php");
    }
    public function alterarForm()
    {
        $id = $_GET["usuario_id"];
        $service = new UsuarioService();
        $resultado = $service->listarId($id);
        $this->template->layout("\\public\\usuario\\form.php", $resultado);
    }
}