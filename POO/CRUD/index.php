<?php
    require_once("vendor/autoload.php");

    // SET 
    $produto = new \App\Model\Produto();
    $produto->setNome("Coca cola");
    $produto->setDescricao("Lata 350ml");

    $produtoDao = new \App\Model\ProdutoDao();
    $produtoDao->create($produto);