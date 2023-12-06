<?php

namespace Hallfit\Core;

class Router{


    protected static $rotas = [];

    public static function add(string $rota, string $controller, string $action)
    {
        static::$rotas[$rota] = [$controller,$action];
    }

    public static function exec(string $url)
    {
        $url = "/".$url;
        $rotas = static::$rotas;

        if( array_key_exists($url,$rotas) ){
            [$controller,$metodo] = $rotas[$url];
        } else{
            [$controller,$metodo] = $rotas['__erro']; 
        }
        
        static::carregarController($controller,$metodo);
    }

    protected static function carregarController($controller,$metodo)
{
    $controller = NS_CONTROLLERS . $controller;
    $ctr = new $controller();
    $ctr->$metodo();
}
}