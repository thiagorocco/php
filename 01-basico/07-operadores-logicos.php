<?php 

    /*
        Operador        Descrição
        ($a and $b) E – Verdadeiro (TRUE) se tanto $a quanto $b forem verdadeiros.
        ($a or $b) OU – Verdadeiro (TRUE) se $a ou $b forem verdadeiros.
        ($a xor $b) XOR – Verdadeiro (TRUE) se $a ou $b forem verdadeiros, de forma exclusiva.
        (! $a) NOT – Verdadeiro (TRUE) se $a for FALSE.
        ($a && $b) E – Verdadeiro (TRUE) se tanto $a quanto $b forem verdadeiros.
        ($a || $b) OU – Verdadeiro (TRUE) se $a ou $b forem verdadeiros.
    */
    $vai_chover = TRUE;
    $esta_frio = TRUE;

    if($vai_chover and $esta_frio)
        echo 'Não vou sair de casa';

    $vai_chover2 = FALSE;
    $esta_frio2 = TRUE;

    // XOR atende a condição se apenas uma delas for verdadeira, ou uma, ou outra
    if($vai_chover2 xor $esta_frio2)
        echo '<BR>Vou pensar duas vezes antes de sair';