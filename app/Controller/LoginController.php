<?php

namespace Hallfit\Controller;

use Hallfit\Core\Controller;
use Hallfit\Core\Validator;
use Hallfit\Model\DAO\AvaliadorDAO;
use Hallfit\Model\Entities\Avaliador;

class LoginController extends Controller{
    
    public function login()
    {
       
        $this->view('login', ['pagina' => 'Login']);
    }

    public function criar_conta()
    {
        $this->view('conta');
    }

    public function cadastrarconta()
    {

        $houveErro = Validator::execute(Avaliador::getRegras(),$this->post() );
        if( $houveErro )
        {
            addFormData($this->post());
            flash(Validator::getListaErros(),'erro');
            redireciona('cadastro');
            
        }

        
        $avaliador = new Avaliador($this->post());
        $avaliador->tipo = 1;


        

        if(AvaliadorDAO::inserir($avaliador)){


        flash("Avaliador {$avaliador->nome} foi cadastrado com sucesso!");
        
        redireciona('login');
    
    }
    }
}
