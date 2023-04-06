<?php


include_once 'assalariado.php';
include_once 'funcionario.php';

$nathan = new Funcionario;

$nathan->codigo = 10;

echo"{$nathan->codigo}";

?>