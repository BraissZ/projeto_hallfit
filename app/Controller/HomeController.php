<?php

namespace Hallfit\Controller;

use Hallfit\Core\Controller;
use Hallfit\Model\DAO\AvaliadorDAO;
use Hallfit\Model\Entities\Avaliador;

class HomeController extends Controller{
    
    public function index()
    {
        $dados = ['titulo' => 'HALLFIT'];
        $this->view('inicial',$dados);
    }


}