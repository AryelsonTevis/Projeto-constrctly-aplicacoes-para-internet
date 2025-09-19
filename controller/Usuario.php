<<<<<<< HEAD
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
    public function listarid()
    {
        $id = $_GET['id'];
        $service = new UsuarioService();
        $resultado = $service->listarId($id);
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
        header("location: /projeto/usuario/listar?info=1");
    }
    public function formulario()
    {

        $this->template->layout("\\public\\usuario\\form.php");
    }
    public function alterarForm()
    {

        $id = $_GET['id'];
        $service = new UsuarioService();
        $resultado = $service->listarId($id);

        $this->template->layout("\\public\\usuario\\formalterar.php", $resultado);
    }
    public function alterar()
    {

        $id = $_POST["usuario_id"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["numero_telefone"];
        $cpf = $_POST["CPF_CNPJ"];
        $senha = $_POST["senha"];
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
        $endereco = $_POST["endereço_cobrança"];
        $service = new UsuarioService();
        $resultado = $service->alterar($id, $nome, $email, $telefone, $cpf, $senha_hash, $endereco);
        header("location: /projeto/usuario/listar?info=1");
    }
    public function apagar()
    {
        $id = $_GET["id"];
        $service = new UsuarioService();
        $resultado = $service->apagar($id);
        header("location: /projeto/usuario/listar?info=1");
    }
    public function listarProprietarios($id)
    {
        $id = $_GET['id'];
        $service = new UsuarioService();
        $resultado = $service->inserir($id);
        header("location: /projeto/usuario/listarproprietarios?info=1");
    }
}
=======
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
    public function listarid()
    {
        $id = $_GET['id'];
        $service = new UsuarioService();
        $resultado = $service->listarId($id);
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
        header("location: /trabalho_patrick/usuario/listar?info=1");
    }
    public function formulario()
    {

        $this->template->layout("\\public\\usuario\\form.php");
    }
    public function alterarForm()
    {

        $id = $_GET['id'];
        $service = new UsuarioService();
        $resultado = $service->listarId($id);

        $this->template->layout("\\public\\usuario\\formalterar.php", $resultado);
    }
    public function alterar()
    {

        $id = $_POST["usuario_id"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["numero_telefone"];
        $cpf = $_POST["CPF_CNPJ"];
        $senha = $_POST["senha"];
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
        $endereco = $_POST["endereço_cobrança"];
        $service = new UsuarioService();
        $resultado = $service->alterar($id, $nome, $email, $telefone, $cpf, $senha_hash, $endereco);
        header("location: /trabalho_patrick/usuario/listar?info=1");
    }
    public function apagar()
    {
        $id = $_GET["id"];
        $service = new UsuarioService();
        $resultado = $service->apagar($id);
        header("location: /trabalho_patrick/usuario/listar?info=1");
    }
    public function listarPro()
    {
        $id = $_GET['id'];
        $service = new UsuarioService();
        $resultado = $service->listarPro($id);

       $this->template->layout("\\public\\proprietario\\listarpro.php", $resultado);
        
    }
}
>>>>>>> 84aa5acded28c0dbe5e374f93d96af76e04d65d4
