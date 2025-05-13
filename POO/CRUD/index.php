<?php
    require_once("vendor/autoload.php");

    // SET 
    $produto = new \App\Model\Produto();
    $produto->setId(3);
    $produto->setNome("copo");
    $produto->setDescricao("branco");

    $produtoDao = new \App\Model\ProdutoDao();
    //$produtoDao->create($produto);

    $lista = $produtoDao->read();

    var_dump($lista);

    $produtoDao->update($produto);

    $produtoDao->delete($produto->getId());