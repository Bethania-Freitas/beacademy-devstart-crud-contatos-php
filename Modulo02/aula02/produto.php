<?php

declare(strict_types=1);


//objeto
class Produto {

    //atributos
    private string $nome;
    private float $valor;


    //metodos
    public function getNome(): string {
        return $this -> nome;
    }

    public function getValor(): float {
        return $this -> valor;
    }

    public function setNome(string $novoNome): void {
        $this -> nome = $novoNome;
    }

    public function setValor(float $novoValor): void {
        if($novoValor < 0){
            die('Ops, valor não pode ser negativo');

        }
        $this -> valor = $novoValor;
    }

}