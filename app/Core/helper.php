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