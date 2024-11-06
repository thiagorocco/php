<?php 
/*
    É similar a uma série de comandos IF sobre a mesma expressão. 
    
    Compara a mesma variável com valores diferentes e executar uma ação específica em cada um desses casos.

    switch ($variavel) {
    case valor1:
    // comandos
    break;
    case valor2:
    // comandos
    break;
    default:
    // comandos

*/
$i = 1;

switch($i){
    case 0:
        print "i é igual a 0";
        break;
     case 1:
        print "i é igual a 1";
        break;
     case 2:
        print "i é igual a 2";
        break;
    default:
        print "i não é igual a 0,1 ou 2";
}

/*
    Observação: se você tem um switch dentro de um loop e deseja continuar para a
    próxima iteração do laço de repetição, utilize o comando continue 2, que escapará
    dois níveis acima.

    Página 56
*/