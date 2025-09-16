<?php

namespace dao\mysql;

use dao\IUsuarioDAO;
use generic\MysqlFactory;

class UsuarioDAO extends MysqlFactory implements IUsuarioDAO
{
    public function listar()
    {
        $sql = "select * from usuarios";
        $retorno = $this->banco->executar($sql);
        return $retorno;
    }
    public function listarId($id)
    {
        $sql = "select * from usuarios where usuario_id=:id";
        $param = [":id" => $id];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }
    public function inserir($nome, $email, $telefone, $cpf, $senha, $endereco)
    {
        $sql = "insert into usuarios (nome,email,numero_telefone,CPF_CNPJ,senha,endereço_cobrança) values (:nome,:email,:telefone, :cpf,:senha,:endereco_cobranca)";
        $param = [
            ":nome" => $nome,
            ":email" => $email,
            ":telefone" => $telefone,
            ":cpf" => $cpf,
            ":senha" => $senha,
            ":endereco_cobranca" => $endereco
        ];

        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }
    public function alterar($id, $nome, $email, $telefone, $cpf, $senha, $endereco)
    {
        $sql = "UPDATE usuarios set nome = :nome, email= :email, numero_telefone = :telefone, CPF_CNPJ = :cpf, senha = :senha, endereço_cobrança = :endereco_cobranca where usuario_id = :usuario_id";
        $param = [
            ":nome" => $nome,
            ":email" => $email,
            ":telefone" => $telefone,
            ":cpf" => $cpf,
            ":senha" => $senha,
            ":endereco_cobranca" => $endereco,
            ":usuario_id" => $id
        ];

        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }
    public function apagar($id)
    {
        $sql = "delete from usuarios where usuario_id = :usuario_id";
        $param = [
            ":usuario_id" => $id
        ];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }
}