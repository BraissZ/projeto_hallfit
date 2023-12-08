<?php

namespace Hallfit\Controller;

use Hallfit\Core\Controller;
use Hallfit\Model\DAO\AvaliadorDAO;
use Hallfit\Model\Entities\Avaliador;

class TesteController extends Controller{






    public function teste()
    {
            $avaliador = new Avaliador();
            $avaliador->nome = "Maria Aparecida";
            $avaliador->email = "mariaaparecida384@gmail.com";
            $avaliador->login = "maria";
            $avaliador->senha = "1234";
            $avaliador->tipo = 1;


        AvaliadorDAO::inserir( $avaliador );


    }

    public function teste2()
    {
        
        $avaliador = AvaliadorDAO::getAll();

        foreach($avaliador as $avaliador){
            echo $avaliador->nome;
            echo "<hr>";
        }
    }

    public function teste3()
    {
        
        $avaliador = AvaliadorDAO::getById(28);
        echo "<pre>";
        var_dump($avaliador);
    }

    public function teste4()
    {
        
        $avaliador = AvaliadorDAO::getById(30);
        
        
        $avaliador->nome = "João Venâncio";
        $avaliador->email = "joaovenancio384@gmail.com";
        $avaliador->login = "venancio";

        AvaliadorDAO::editar($avaliador);

        echo "<pre>";
        var_dump($avaliador);

    }

    public function teste5()
    {
        
        $avaliador = AvaliadorDAO::getById(27);
        
        if($avaliador){
            AvaliadorDAO::excluir($avaliador);
            echo "Avaliador excluído com sucesso";
        }else{
            echo "Avaliador não existe";
        }
        

    }


    public function teste6()
    {
        $avaliador = new Avaliador(
            [
                'nome' => 'Wilson',
                'email'=> 'wilsoncosta230@gmail.com',
                'login' => 'wilson',
                'senha' => '1234',
                'tipo' => 1
            ]
        );

        echo "<pre>";
        var_dump($avaliador->getProps());


    }

}
