<?php

namespace Hallfit\Model\DAO;

use Hallfit\Core\Database;
use Hallfit\Model\Entities\Avaliador;

class AvaliadorDAO{

    public function inserir(Avaliador $avaliador)
    {
        $db = new Database();
        $sql = "INSERT INTO avaliador (nome,email,login,senha,tipo) VALUES (?,?,?,?,?)";

        $dados = [
            $avaliador->nome,
            $avaliador->email,
            $avaliador->login,
            $avaliador->senha,
            $avaliador->tipo
        ];

        var_dump($db->execute($sql,$dados));
    }
}


