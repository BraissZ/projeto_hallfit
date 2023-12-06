<?php

namespace Hallfit\Controller;

use Hallfit\Core\Controller;

class HomeController extends Controller{
    
    public function index()
    {
        $dados = ['titulo' => 'HALLFIT'];
        $this->view('inicial',$dados);
    }
}