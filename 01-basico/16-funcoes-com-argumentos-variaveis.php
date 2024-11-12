<?php 

    /*
       Trabalhando com argumentos variáveis com dois métodos:
       
       func_get_args() - pega todos os argumentos e armazena-os em um array
       func_num_args() - pega o número de argumentos que foram passados

    */
    
    function ola(){
        $argumentos = func_get_args();
        $quantidade = func_num_args();
        for($n=0; $n<$quantidade;$n++){
            echo 'Olá, '.$argumentos[$n].',';
        }
    }

    ola('João','Maria','José','Pedro');
