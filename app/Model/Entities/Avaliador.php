<?php
namespace Hallfit\Model\Entities;

use Hallfit\Core\Entity;

class Avaliador extends Entity{

    protected ?int $id;
    protected ?string $nome;
    protected ?string $email;
    protected ?string $login;
    protected ?string $senha;
    protected ?int $tipo;

    

    public function setSenha($valor)
    {
        $this->senha = password_hash($valor,PASSWORD_DEFAULT);
    }


    public static function getregras() :array
    {
        return [
            'nome' => 'obrigatorio|maiorque:4',
            'email' => 'obrigatorio|email',
            'login' => 'obrigatorio',
            'senha' => 'obrigatorio|maiorque:5',
        ];
    }

     

}
