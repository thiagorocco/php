<?php 
    //variáveis globais
    $peso = 86;

    function nome_da_funcao($arg1, $arg2, $argN){
        //variáveis locais
        $valor = $arg1 + $arg2 + $argN;
        return $valor;
    }

    function calcula_imc($altura){
        global $peso;
        return $peso / ($altura * $altura);
    }

    //variável estática
    function percorre($quilometros){
        static $total;
        $total += $quilometros;
        echo "percorreu mais $quilometros do total de $total<br>\n";
    }

    //Passagem de parametro por referência, altera o valor da variável passada por parâmetro
    //O segundo parametro tem o valor iniciado em 20, o que fica facultativo informar o valor para o segundo parametro na chamada da função
    function incrementa(&$variavel, $valor=20){
        $variavel += $valor;
    }
    $a = 10;
    incrementa($a);//Não informado o segundo parâmetro
    echo $a; //30

    echo '<br>';    
    echo nome_da_funcao(1,2,3);
    echo '<br>';
    echo calcula_imc(1.86);
    echo '<br>';
    percorre(100);
    percorre(200);
    percorre(50);
