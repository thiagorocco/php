<?php 

    //Escrevendo em um arquivo
    $fp = fopen ("file.txt", "w"); // abre o arquivo para gravação
    // escreve no arquivo
    fwrite ($fp, "linha 1" . PHP_EOL);
    fwrite ($fp, "linha 2" . PHP_EOL);
    fwrite ($fp, "linha 3" . PHP_EOL);
    fclose ($fp); // fecha o arquivo

    //Página 66