<?php

namespace dao\mysql;

use dao\ICasaDAO;
use generic\MysqlFactory;

class CasaDAO extends MysqlFactory implements ICasaDAO
{

public function listarcasa($id){
        $sql = "select * from casas where fk_proprietario = :id";
        $param=["id"=>$id];
        $retorno = $this->banco->executar($sql,$param);
        return $retorno;
    }
    public function inserir( $id, $bairro, $metros, $comodos, $valor)
    {
        $sql = "insert into casas (fk_proprietario,bairro,metros,quantidade_comodos,valor_estimado) values (:id,:bairro,:metros,:comodos, :valor)";
        $param = [
            ":id" => $id,
            ":bairro" => $bairro,
            ":metros" => $metros,
            ":comodos" => $comodos,
            ":valor" => $valor
        ];

        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }
    public function listarId($id)
    {
        $sql = "select * from casas where casa_id=:casa_id ";
        $param = [":casa_id" => $id];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }
}