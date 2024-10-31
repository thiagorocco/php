<?php 
    //SUPERGLOBAIS
    //variáveis disponibilizadas pelo próprio PHP em qualquer 
    //local em que você esteja executando, seja no programa principal, dentro de
    //uma função, ou por um método específico.

    /*
        $_GET – Contém um vetor com as variáveis informadas em uma
        requisição $_GET. Por exemplo, a requisição http://localhost/sample.php?
        name=john&age20 retorna um vetor com as posições john e age, contendo
        os respectivos valores.

        $_POST – Funciona da mesma maneira que $_GET, mas contém as
        informações enviadas pelo método POST, geralmente usado no envio de
        formulários.
        
        $_FILES – Contém um vetor com informações dos arquivos enviados para
        upload. Esta pode ser acessada logo após o upload de um arquivo por
        upload via formulário.
        
        $_COOKIE – informações recebidas pelo script que atualmente estão armazenadas nos cookies.
        
        $_SESSION – Contém um vetor com as variáveis da sessão do usuário.
        
        $_REQUEST – Contém um vetor com as informações de $_GET, $_POST, e $_COOKIE.
        
        $_ENV – Contém um vetor com variáveis de ambiente. Possivelmente útil
        ao executarmos um script PHP pela linha de comando, pois contém
        informações sobre o usuário do sistema operacional (USER), diretório
        home do usuário (HOME), entre outros dados.
        
        $GLOBALS – Contém uma lista com todas as variáveis globais disponíveis
        para o script.
    */         
