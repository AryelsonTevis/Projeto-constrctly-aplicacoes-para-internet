<?php

namespace dao;

interface IProprietarioDAO
{
    public function listar();

    public function listarid($id);
    public function inserir($nome, $email, $numero, $cpf, $endereco);
}