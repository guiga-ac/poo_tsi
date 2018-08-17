<?php
include_once 'Cachorro.php';

$c1 = new Cachorro();
$c1->nome = 'Totó';
$c1->ano_nascimento = 2015;
$idade = $c1->calculaIdade();
echo "O cachorro tem ".$idade." ano(s)\n";

$c1->latir();
$c1->atacar();

print_r($c1);