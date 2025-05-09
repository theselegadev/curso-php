<?php
    require_once './vendor/autoload.php';

    use Cocur\Slugify\Slugify;

    $slugify = new Slugify();
    
    echo $slugify->slugify("Teste com acentuação para geração de slug")

?>