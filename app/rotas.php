<?php

use Hallfit\Core\Router;

Router::get('/','HomeController','index');
Router::get('/login','LoginController','login');
Router::get('/cadastro','LoginController','criar_conta');
Router::post('/cadastrarconta','LoginController','cadastrarconta');