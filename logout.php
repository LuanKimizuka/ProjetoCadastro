<?php
include('cria_sessao.php');
    // LIMPO AS VARIÁVEIS DA SESSÃO
    session_unset();
    //DESTRÓI UMA SESSÃO
    session_destroy();
    // VOLTA PARA A PAGINA INICIAL
    header('Location: index.php');
?>