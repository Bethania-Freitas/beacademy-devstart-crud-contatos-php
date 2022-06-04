<?php

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Roupas', 'Roupas Unissex');
$c2 = new Categoria('Roupas de Banho', 'Toalhas, Toalhas de Rosto, etc..');
$c3 = new Categoria('Calçados', 'Calçados em geral');




$p1 = new Produto('Tenis', 299, $c3);
$p1->setDescricao('Tenis para corrida profissional');
// $p1 ->setNome('Tenis para Corrida');
// $p1 ->setValor(299);

$p2 = new Produto('Saia Jeans', 100, $c1);
// $p2 ->setNome('Saia Jeans');
// $p2 ->setValor(199);

$p3 = new Produto('Calça Branca', 159.78, $c1);
// $p3 ->setNome('Calça Branca');


var_dump($p1);
var_dump($p2);
var_dump($p3);

