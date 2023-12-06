<?php

namespace Hallfit\Controller;

use Hallfit\Core\Controller;

class ErroController extends Controller{
    
    public function erro($tipo)
    {
        
        switch($tipo){
            case "404":
                $this->view('404');
            break;
            case "controller":
                $this->view('erro',['msg' => 'Controller Não Existe']);
            break;
            case "metodo":
                $this->view('erro',['msg' => 'O Método não existe no Controlador']);
            break;
        }

    }
}