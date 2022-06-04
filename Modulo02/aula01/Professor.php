<?php

declare (strict_types=1);

class Professor {   
    private string $nome;  
    private string $cpf;
    private float $salario;

    public function __construct(string $novoNome, string $novoCpf, float $novoSalario)
    {
        $this->nome = $novoNome;
        $this->cpf = $novoCpf;
        $this->salario = $novoSalario;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome(string $novoNome): void
    {
        $this->nome = $novoNome;
    }
    public function getCpf(): string
    {
        return $this->cpf;
    }
    public function setCpf(string $novoCpf): void
    {
        $this-> cpf = $novoCpf;
    }
    public function getSalario(): float
    {
        return $this-> salario;
    }
    public function setSalario(float $novoSalario): void
    {
        $this->salario = $novoSalario;
    }
}
