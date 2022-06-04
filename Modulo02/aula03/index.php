<?php

include 'Produto.php';
include 'Categoria.php';


$p1 = new Produto('Tenis', 299);
$p1->setDescricao('Tenis para corrida profissional');
// $p1 ->setNome('Tenis para Corrida');
// $p1 ->setValor(299);

$p2 = new Produto('Saia Jeans', 100);
// $p2 ->setNome('Saia Jeans');
// $p2 ->setValor(199);

$p3 = new Produto('Calça Branca', 159.78);
// $p3 ->setNome('Calça Branca');


var_dump($p1);
var_dump($p2);
var_dump($p3);

