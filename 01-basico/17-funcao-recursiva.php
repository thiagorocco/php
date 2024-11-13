<?php 

    //função recursiva = função que retorna a própria função
    function fatorial($numero){
        if($numero ==1)
            return $numero;
        else
            return $numero * fatorial($numero -1);
    }
    echo fatorial(6)."<br>\n";

    /*
        Na implementação acima, toda vez que retornar a própria função, o programa torna-se uma espécie de loop
        e só vai parar quando encontrar uma condição que retorne algo que não seja a própria função
    */