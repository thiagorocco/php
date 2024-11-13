<?php
    set_time_limit(0);
    date_default_timezone_set("Brazil/East");
    
    // Iniciamos o "contador"
    list($usec3, $sec3) = explode(' ', microtime());
    $script_start3 = (float) $sec3 + (float) $usec3;
    
    if (!empty($_POST["tamanho"]))
    {
    
    $tamanho = $_POST["tamanho"] * 1000000;
    $exemplo = $_POST["exemplo"];
    $vlr = $tamanho / $exemplo;
    
    // Iniciamos o "contador"
    list($usec, $sec) = explode(' ', microtime());
    $script_start = (float) $sec + (float) $usec;
    $soma = 0;
    for ($x = 1; $x <= $tamanho;$x++)
    {
    $soma=sqrt(pow($x,2));
    } 
    $soma = 0;
    // Terminamos o "contador" e exibimos
    list($usec, $sec) = explode(' ', microtime());
    $script_end = (float) $sec + (float) $usec;
    $elapsed_time = round($script_end - $script_start, 5);
    
    // Exibimos uma mensagem
    echo 'Processo Simples: ', $elapsed_time, ' segundo(s) - ' . ($tamanho/1000000) . ' unidades<br><br>';
    
    class AguardaRand extends Thread {
    
    // ID da thread (usado para identificar a ordem que as threads terminaram)
    protected $id, $vlr;
    
    // Construtor que apenas atribui um ID para identificar a thread
    public function __construct($id, $vlr) { 
    $this->id = $id;
    $this->vlr = $vlr;
    }
    
    // Metodo principal da thread, que sera acionado quando chamarmos "start"
    public function run() {
    $soma = 0;
    for ($x = 1; $x <= $this->vlr;$x++)
    {
    $soma=sqrt(pow($x,2));
    } 
    $soma = 0;
    }
    }
    
    // Iniciamos o "contador"
    list($usec2, $sec2) = explode(' ', microtime());
    $script_start2 = (float) $sec2 + (float) $usec2;
    
    // Criar um vetor com 10 threads do mesmo tipo
    $vetor = array();
    for ($id = 0; $id < $exemplo; $id++) {
    $vetor[] = new AguardaRand($id,$vlr);
    }
    
    // Iniciar a execucao das threads
    foreach ($vetor as $thread) {
    $thread->start();
    }
    
    $thread->join();
    
    // Terminamos o "contador" e exibimos
    list($usec2, $sec2) = explode(' ', microtime());
    $script_end2 = (float) $sec2 + (float) $usec2;
    $elapsed_time2 = round($script_end2 - $script_start2, 5);
    echo 'Multithreads: ', $elapsed_time2, ' segundo(s) - ' . ($tamanho/1000000) . '(' . $exemplo . ' X ' . ($vlr/1000000) . ') unidades ('.round(((($elapsed_time2/$elapsed_time)-1)*100),1).'%)<br><br>';
    
    }
    
    // Terminamos o "contador" e exibimos
    list($usec3, $sec3) = explode(' ', microtime());
    $script_end3 = (float) $sec3 + (float) $usec3;
    $elapsed_time3 = round($script_end3 - $script_start3, 5);
    echo 'Tempo Total: ', $elapsed_time3, ' segundo(s)<br>';
 
?>