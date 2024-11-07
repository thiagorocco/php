<?php

    /*
        Continue
        Ignora as instruções restantes até o fechamento em }.
        O programa segue para a próxima iteração da condição de entrada
        do laço de repetição

        Break
        Interrompe o fluxo do laço de repetição ou de bloco de comandos como IF saindo imediatamente do
        seu escopo.
    */


    echo '<br> Apenas números pares: ';
    for($numero=1;$numero<=10;$numero++){
        if($numero %2 != 0)
            continue;
        echo $numero.' - ';
    }



    $idade = 14;

    while($idade){
        if($idade == 18){
            echo '<br>Atingiu a maioridade. Nada de presente do dia das crianças';
            break;
        }
        echo '<br>Idade: '.$idade.' - Presente de dia das crianças';
        $idade++;
    }