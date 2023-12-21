<?php

    session_start();
    /*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    //remover índices de array de sessão 
    //unset();

    unset($_SESSION['x']); //remove o indice apenas se existir

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

     //destruir variaveis de sessão
    //session_destroy();
    
    session_destroy(); //será destruida mas as inf só desaparecerão após forçar um redirecionamento

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    */

    session_destroy();
    header('Location: index.php');
?>