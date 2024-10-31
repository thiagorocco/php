<?php 
    //Tipagem estrita
    //quando habilitada, exige que o tipo da variável passada como parâmetro em tempo de execução
    //seja exatamente o mesmo tipo declarado.

    declare(strict_types=1);
    function calcula_imc(float $peso, float $altura):float{
        var_dump($peso, $altura);
        return $peso / ($altura*$altura);
    }
    var_dump(calcula_imc(75,1.85));
    
    //vai dar erro aqui
    var_dump(calcula_imc('75.1',2));