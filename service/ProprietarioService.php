<?php

namespace service;


use dao\mysql\ProprietarioDAO;

class proprietarioService extends ProprietarioDAO
{
    public function listarPropietario()
    {
        return parent::listar();
    }

    public function listarId($id)
    {
        return parent::listarId($id);
    }
    public function inserir($nome, $email, $telefone, $cpf, $endereco)
    {
        return parent::inserir($nome, $email, $telefone, $cpf, $endereco);
    }
}
