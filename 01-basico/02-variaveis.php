<?php 
$a = 5;
$b = &$a;
$b = 10;
echo $a.'<br>';
echo $b.'<br>';

$inteiro = 34;
$codigo_cliente = 144;
$string = 'Thiago';
$outra_string = 'Rocco';
$vetor = array('Palio','Gol','Fiesta','Corsa');
var_dump($vetor);

//objetos
$obj = new stdClass; //Cria um objeto
$obj->nome = 'Maria'; //define atributo
$obj2 = &$obj; // Cria réplica
$obj2->nome = 'Joana';
print $obj->nome; //Joana sobrescreve Maria
echo '<br>';
print $obj2->nome;
$carro = new stdClass;
$carro->modelo = 'Palio';
$carro->ano = 2011;
$carro->cor = 'Azul';

echo '<br>';
print_r($carro);


//boolean
$exibir_nome = TRUE; // true, True ou TRUE é a mesma coisa
if ($exibir_nome){
    echo '<br>José da Silva';
}
/*
    Também são considerados valores falsos em comparações booleanas:
    • Inteiro 0.
    • Ponto flutuante 0.0.
    • Uma string vazia “” ou “0”.
    • Um array vazio.
    • Um objeto sem elementos.
    • Tipo NULL.
*/

//recurso(resource)
/* 
    mantém uma referência de recurso externo. 
    Recursos são criados e utilizados por funções como aquelas que
    criam conexões de banco de dados. Quando as funções mysql_connect() e
    pg_connect(), por exemplo, são conectadas ao banco de dados, retornam uma
    variável de referência do tipo recurso. 
*/

//Tipo misto -  indica que a função aceita diversos tipos de dados como parâmetro.
//Um exemplo é a função gettype(), que obtém o tipo da variável

