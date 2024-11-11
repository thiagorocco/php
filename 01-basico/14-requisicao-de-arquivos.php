<?php

/**
 *  Página 58
 * 
 *  Ambos incluem um arquivo externo, porém em caso de erro na requisição do arquivo externo: 
 * 
 *  include: Dá uma mensagem de warning
 *  require: Dá um erro fatal
 * 
 *  Ex. include 'tools.php';
 *  
 * 
 * include_once
 * require_once
 * 
 * Fazem inclusão e requisição apenas uma única, caso o arquivo incluído já existe ele não faz a operação
 * 
 */