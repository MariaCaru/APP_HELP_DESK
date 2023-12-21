<?php

    session_start();

    //montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

        //implode ('#', $_post)
    $informacoes_chamado = implode('-', array($titulo, $categoria, $descricao));
    echo $informacoes_chamado;     
    
    $texto = 
   $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL; 

    //abrindo o arquivo
    $arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');

    //escrevendo texto
    fwrite($arquivo, $texto);

    //fechando o arquivo
    fclose($arquivo);

    //echo $texto;
    header('Location: abrir_chamado.php');
    
?>