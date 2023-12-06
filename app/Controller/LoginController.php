<?php

namespace Hallfit\Controller;

use Hallfit\Core\Controller;

class LoginController extends Controller{
    
    public function login()
    {
        $this->view('login', ['pagina' => 'Login']);
    }

    public function criar_conta()
    {
        $this->view('conta');
    }
}