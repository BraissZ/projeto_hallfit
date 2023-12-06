<?php

use Hallfit\Core\Router;

Router::add('/','HomeController','index');
Router::add('/login','LoginController','login');
Router::add('/teste','LoginController','teste');
Router::add('/cadastro','LoginController','criar_conta');