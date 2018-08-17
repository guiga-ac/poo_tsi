<?php

require_once('CachorroPequeno.php');
require_once('CachorroGrande.php');

$toto = new CachorroPequeno();
$toto->nome = 'Totó';
$toto->codigo = 01;
$toto->idade = 3;
$toto->latir();
echo "<pre>";
var_dump($toto);
