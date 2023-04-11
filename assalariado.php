<?php

include_once 'funcionario.php';

class Assalariados{
    var $salario;
    var $inss;
    var $vt;
    var $salarioLiquido;

}

function inss ($salario){
    if($salario>1300){
        $salarioLiquido = $salario - 0.06%;
        
    }
    
    return $salarioLiquido;
}


?>