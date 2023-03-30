<?php

class Funcionarios{
    var $codigo;
    var $nome;
    var $sobrenome;
    var $funcao;
    var $admissao;
    var $salario;

    function __construct($codigo, $nome, $sobrenome, $funcao, $admissao, $salario){
        $this->codigo=$codigo;
        $this->nome=$nome;
        $this->sobrenome=$sobrenome;
        $this->funcao=$funcao;
        $this->admissao=$admissao;
        $this->salario=$salario;
    }
}

?>