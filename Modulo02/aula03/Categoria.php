<?php

declare(strict_types=1);

class Categoria{
    private string $nome;
    private string $descricao;

    public function __construct(string $nome, string $descricao)
    {
       $this->nome = $nome;
       $this->descricao = $descricao; 
    }
}