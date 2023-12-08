<?php

namespace Hallfit\Model\DAO;

use Hallfit\Core\DAO;
use Hallfit\Core\Database;
use Hallfit\Core\Entity;
use Hallfit\Model\Entities\Avaliador;

class AvaliadorDAO extends DAO{

    protected static string $tabela = "avaliador";
    protected static string $classe = Avaliador::class;

    
}


