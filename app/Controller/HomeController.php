<?php

namespace Hallfit\Controller;

use Hallfit\Core\Controller;
use Hallfit\Core\Database;
use Hallfit\Model\Avaliador;

class HomeController extends Controller{
    
    public function index()
    {
        $dados = ['titulo' => 'HALLFIT'];
        $this->view('inicial',$dados);
    }

    public function teste()
    {
       $avaliador = new Avaliador();

       $avaliador->inserir( ['Tarcísio','joaotarcisio234@gmail.com','tarcisio','1234',1] );
}
}