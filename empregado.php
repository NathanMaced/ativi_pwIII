<?php

class Funcionarios{
    var $codigo;
    String $nome;
    String $sobrenome;
    String $cpf
    var $funcao;
    var $admissao;
    var $salario;

    function __construct($codigo, $nome, $sobrenome,$cpf, $funcao, $admissao, $salario){
        $this->codigo=$codigo;
        $this->nome=$nome;
        $this->sobrenome=$sobrenome;
        $this->cpf=$cpf;
        $this->funcao=$funcao;
        $this->admissao=$admissao;
        $this->salario=$salario;
    }
    function __destruct(){
        echo "<br>Objeto {$this->nome} finalizando ... <br>";
    }
}

?>