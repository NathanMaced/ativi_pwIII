<?php

class Funcionario{
    var $codigo;
    var $nome;
    var $idade;
    var $nascimento;
    var $salario;
    var $cpf;

    function __construct($codigo, $nome, $idade, $nascimento, $salario, $cpf){
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->nascimnto = $nascimento;
        $this->salario = $salario;
        $this->cpf = $cpf;
    }
}
