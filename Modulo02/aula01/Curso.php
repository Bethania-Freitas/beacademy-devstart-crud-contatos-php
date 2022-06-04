<?php

declare (strict_types=1);

class Curso {   
    private string $nome;  
    private string $descricao;
    private float $cargaHoraria;

    public function __construct(string $novoNome)
    {
        $this->nome = $novoNome;
    }

    public function getNome() : string
    {
        return $this ->nome;
    }
    public function setNome(string $novoNome): void
    {
        $this-> nome = $novoNome;
    }
    public function getDescricao() : string
    {
        return $this ->descricao;
    }
    public function setDescricao(string $novaDescricao) : void
    {
        $this-> descricao = $novaDescricao;
    }
    public function getCargaHoraria() : float
    {
        return $this->cargaHoraria;
    }
    public function setCargaHoraria(float $novaCargaHoraria):void
    {
        $this-> cargaHoraria = $novaCargaHoraria;
    }


}
