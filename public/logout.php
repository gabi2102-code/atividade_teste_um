<?php
 // Inicia a sessão para ter acesso aos dados armazenados nela
    session_start();
// Remove todos os dados da sessão atual
    session_destroy();
// Redireciona o usuário para a página de login    
    header("Location: ../index.php");
// Encerra a execução do script
    exit();
?>