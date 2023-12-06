<?php

namespace Hallfit\Controller;

use Hallfit\Core\Controller;

class ErroController extends Controller{
    
    public function erro404()
    {
        $this->view('404');
    }
}