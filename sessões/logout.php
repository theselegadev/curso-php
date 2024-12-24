<?php 
    // Limpando e destruindo sessões no php

    session_start();
    // Limpa a sessão
    session_unset();
    // Destroi a sessão
    session_destroy();
?>