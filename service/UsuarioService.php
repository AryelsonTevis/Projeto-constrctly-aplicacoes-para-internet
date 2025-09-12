<?php

namespace service;

use dao\mysql\UsuarioDAO;

class UsuarioService extends UsuarioDAO
{
    public function listarUsuario()
    {
        return parent::listar();
    }
    public function inserir($nome, $email, $telefone, $cpf, $senha, $endereco)
    {
        return parent::inserir($nome, $email, $telefone, $cpf, $senha, $endereco);
    }
    public function alterar($id, $nome, $email, $telefone, $cpf, $senha, $endereco)
    {
        return parent::alterar($id, $nome, $email, $telefone, $cpf, $senha, $endereco);
    }
    public function listarid($id)
    {
        return parent::listarid($id);
    }
}
