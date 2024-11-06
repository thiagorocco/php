<?php 

    /*
        Comparadores Descrição

        == Igual. Resulta verdadeiro (TRUE) se as expressões forem iguais.
        === Idêntico. Resulta verdadeiro (TRUE) se as expressões forem iguais e
            tiverem o mesmo tipo de dados.
        != ou <> Diferente. Resulta verdadeiro (TRUE) se as variáveis forem diferentes.
        < Menor que.
        > Maior que.
        <= Menor que ou igual a.
        >= Maior que ou igual a.
    */

    $a = 3;
    $b = 1234;
    $c = '1234';
    $d = 0;

    if($a==3)
        echo 'Essa verifica se o conteúdo de $a é igual a 3';

    if($a=5)
        echo '<br>Essa operação atribui 5 à variável $a';
    
    if($b == $c)
        echo '<br>$b e $c são iguais. Mas não necessariamente identicos';
    
    if($b === $c)
        echo '<br>$b e $c são identicos';
    else
        echo '<br>$b e $c NÃO são identicos';

    if($d == FALSE)
        echo '<br>Valor de $d equivale a falso';