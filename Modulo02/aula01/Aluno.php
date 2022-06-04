<?php

declare(strict_types=1);

class Aluno {   //Classe
    private string $nome;  //Atributos
    private string $cpf;

    public function __construct(string $novoNome, string $novoCpf)
    {
        $this->nome = $novoNome;
        $this->cpf = $novoCpf;
    }

    public function getNome(): string 
    {
        return $this -> nome;
    }

    public function setNome(string $novoNome): void 
    {
         $this -> nome = $novoNome;
    }

    public function getCpf(): string 
    {
        return $this -> cpf;
    }

    public function setCpf(string $novoCpf): void
    {
        $this -> cpf = $novoCpf;
    }
}



