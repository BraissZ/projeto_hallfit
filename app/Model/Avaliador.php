<?php

namespace Hallfit\Model;

use Hallfit\Core\Database;

class Avaliador{

    public function inserir($avaliador)
    {
        $db = new Database();
        $sql = "INSERT INTO avaliador (nome,email,login,senha,tipo) VALUES (?,?,?,?,?)";

        

        var_dump($db->execute($sql,$avaliador));
    }
}


