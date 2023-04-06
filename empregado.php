<?php


include_once 'assalariado.php';
include_once 'funcionario.php';

$nathan = new Funcionario;

$nathan->codigo = 10;
$nathan->nome = "Nathan";
$nathan->idade = 20;
$nathan->nasciento = "04/03/2003";
$nathan->salario = 1000;
$nathan->cpf = "427.191.828.85";


echo"{$nathan->codigo}";
echo"{$nathan->nome}";
echo"{$nathan->idade}";
echo"{$nathan->nascimento}";
echo"{$nathan->salario}";
echo"{$nathan->cpf}";

?>