<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';

$a1 = new Aluno('Bethania', '333.444.222-00');  //instanciando   -  //Objeto Aluno
// $a1 ->nome = "Bethânia";
// $a1 ->cpf = '333.444.222-00' ;

$cursoPHP = new Curso('Intrudução ao PHP', 88);  //Objeto Curso
// $cursoPHP ->nome = 'Introdução ao PHP';
// $cursoPHP ->cargaHoraria = 88;
// $cursoPHP ->descricao = 'Aprender o basico e intermediario de PHP';

$p1 = new Professor('Alessandro', '111222333222', 1000);
// $p1 ->nome = 'Alessandro';
// $p1 ->cpf = '11122233322';
// $p1 ->salario = 1000;


var_dump($a1);
var_dump($cursoPHP);
var_dump($p1);


