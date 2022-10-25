<?php
    session_start(); //inicia a sesão
    $_SESSION = array();  //carrega o array d sessões
    session_destroy();   //destroi as sessões iniciadas
    header('location: ../gym.php');  //redireciona o usuário para a pagina index
?>