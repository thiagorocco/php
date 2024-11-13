<?php 
    /*
        Funções anônimas, ou lambda functions, são funções que podem ser definidas
        em qualquer instante e, diferentemente das funções tradicionais, não têm um
        nome definido.

        Sempre que quisermos utilizar a função anônima, basta usar a variável na qual ela está definida
    */

    $remove_acento = function($str){
        $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Ç', 'È', 'É', 'Ê','Ì', 'Í', 'Ò', 'Ó', 'Ô', 'Õ', 'Ù', 'Ú', 'à',
        'á', 'â', 'ã', 'ç', 'è', 'é', 'ê', 'í', 'î',
        'ò', 'ó', 'ô', 'õ', 'ù', 'ú', 'û', 'ü');

        $b = array('A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E',
                'I', 'I', 'O', 'O', 'O', 'O', 'U', 'U', 'a',
                'a', 'a', 'a', 'c', 'e', 'e', 'e', 'i', 'i',
                'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u');
        
        return str_replace($a, $b, $str);
    };

    print $remove_acento('José da Conceição');
    print '<br>' . PHP_EOL;

    $palavras = array();
    $palavras[] = 'José da Conceição';
    $palavras[] = 'Jéferson Araújo';
    $palavras[] = 'Félix Júnior';
    $palavras[] = 'Ênio Müller';
    $palavras[] = 'Ângelo Ônix';

    // array array_map ( callback $callback , array $arr1 [, array $... ] )
    $r = array_map( $remove_acento, $palavras );
    print_r($r);