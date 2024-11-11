<?php 
    function nome_da_funcao($arg1, $arg2, $argN){
        $valor = $arg1 + $arg2 + $argN;
        return $valor;
    }

    function calcula_imc($peso, $altura){
        return $peso / ($altura * $altura);
    }

    echo nome_da_funcao(1,2,3);
    echo '<br>';
    echo calcula_imc(86,1.86);
