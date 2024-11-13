<?php

    /*
        fopen
            Abre um arquivo e retorna um identificador. Aceita arquivos no formato
            “http://...”.
            resource fopen ( string $filename , string $mode [, ...] )
        
        feof
            Testa se determinado identificador de arquivo (criado pela função fopen())
            está no fim de um arquivo (End Of File).
            bool feof ( resource $handle )
        
        fclose
            Fecha o arquivo aberto apontado pela fopen(). Retorna TRUE em caso de
            sucesso ou FALSE em caso de falha.
            bool fclose ( resource $handle )
        
        fgets
            Lê uma linha de um arquivo aberto pela fopen() no formato de string.
            Recebe opcionalmente um tamanho máximo a ser lido. Se ocorrer um erro,
            retorna FALSE.
            string fgets ( resource $handle [, int $length ] )
    */
    $fd = fopen ( __FILE__, "r"); //Abre o próprio arquivo
    $linha = 1;
    while (!feof ($fd)) {
    $buffer = fgets($fd, 4096); // lê uma linha do arquivo
    if ($linha > 1) {
    echo $buffer; // imprime a linha
    }$linha ++;
    }fclose ($fd);