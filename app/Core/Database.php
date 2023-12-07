<?php
namespace Hallfit\Core;

class Database{

    protected \PDO $conexao;
    protected \PDOStatement $stmt;

    public function __construct()
    {
        $servidor = "localhost";
        $banco = "hallfit";
        $avaliador = "root";
        $senha = "";
        $dsn = "mysql:host={$servidor};dbname={$banco}";

        $this->conexao = new \PDO($dsn,$avaliador,$senha);

        
    }

    public function execute(string $sql, array $dados = []) :bool
    {
        $this->stmt = $this->conexao->prepare($sql);
        return $this->stmt->execute($dados);
    }
    
}