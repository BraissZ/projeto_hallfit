<?php


function css(string $arquivo): string
{
    return URL_BASE."public/css/{$arquivo}.css";
}

function imgPng(string $nome_png): string
{
    return URL_BASE."public/image/{$nome_png}.png";
    
}

function imgJpg(string $nome_jpg): string
{
    return URL_BASE."public/image/{$nome_jpg}.jpg";
}

function componente(string $componente)
{
    require PASTA_VIEW . "componentes/{$componente}.view.php";
}

function linkrota($rota = "")
{
    return URL_BASE . "{$rota}";
}


function redireciona($rota = "")
{
    header("location: ".linkrota($rota));
    die;
}

function flash($mensagem = "", $tipo = "sucesso")
{
    if(!empty($mensagem))
    {
        $_SESSION['__mensagem'] = [$mensagem,$tipo];
    }else if(empty($mensagem) && isset($_SESSION['__mensagem']))
    {
        [$mensagem,$tipo] = $_SESSION['__mensagem'];
        $retorno = "";
        $retorno .= $mensagem;
        unset($_SESSION['__mensagem']);
        return $retorno;
    }else{
        return "";
    }
}


function addFormData(array $dados)
{
    $_SESSION['__form'] = $dados;

}

function limparFormData(string $campo = "")
{
    if($campo == ""){
        unset($_SESSION['__form']);
    }else{
        if( isset($_SESSION['__form'][$campo])){
            unset($_SESSION['__form'][$campo]);
        }
    }   
}

function getValue(string $campo)
{
    $form = $_SESSION['__form'];
    if(isset($form[$campo])){
        $valor = $form[$campo];
        limparFormData($campo);
        return $valor;
    }else{
        return "";
    }
}