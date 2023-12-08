<?php

namespace Hallfit\Controller;

use Hallfit\Core\Controller;
use Hallfit\Core\Database;
use Hallfit\Model\DAO\AvaliadorDAO;
use Hallfit\Model\Entities\Avaliador;

class HomeController extends Controller{
    
    public function index()
    {
        $dados = ['titulo' => 'HALLFIT'];
        $this->view('inicial',$dados);
    }

    public function teste()
    {
        $avaliador = new Avaliador();
        $avaliador->nome = "Kaio";
        $avaliador->email = "kaioribeiro389@gmail.com";
        $avaliador->login = "kaio";
        $avaliador->senha = "1234";
        $avaliador->tipo = 1;

       $DAO = new AvaliadorDAO();

       $DAO->inserir( $avaliador );
}
}