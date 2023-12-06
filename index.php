<?php
declare(strict_types=1);

use Hallfit\Controller\ErroController;
use Hallfit\Controller\HomeController;
use Hallfit\Controller\LoginController;

require __DIR__ . "/vendor/autoload.php";

const PASTA_VIEW = "./app/View/";

$url = $_GET['url'] ?? "/";

switch($url){
    case "/":
        $controller = new HomeController();
        $controller->index();
    break;
    case "login":
        $controller = new LoginController();
        $controller->login();
    break;
    case "cadastro":
        $controller = new LoginController();
        $controller->criar_conta();
    break;
    default:
        $controller = new ErroController();
        $controller->erro404();
        
}