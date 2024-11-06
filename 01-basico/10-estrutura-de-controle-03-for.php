<?php

    /*
        Página 53/633.

        o bloco de comandos será executado um certo número de vezes.

        for (expr1; expr2; expr3) {
            comandos
        }
    */
    for($i = 1; $i <= 10; $i++){
        print($i);
    }

    /*
     
        Evite laços de repetição com muitos níveis de iteração. Como o próprio Linus
        Torvalds já disse certa vez, se você estiver utilizando três níveis encadeados
        ou mais, considere a possibilidade de revisar a lógica de seu programa.
     */