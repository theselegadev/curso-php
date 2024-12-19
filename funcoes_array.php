<?php
// is_array($array) = verifica se uma determinada variável é um array
// in_array($valor,$array) = verifica se um determinado valor existe em um array
// array_keys($array) = retorna um novo array com as chaves do array passado como parâmetro
// array_merge($array1,$array2) = agrega o contúdo dos dois arrays
// array_pop($array) =  exclui a ultima posição do array
// array_shift($array) = exclui a primeira posição do array
// array_unshift($array,"valor") = adiciona um ou mais elementos no inicio do array
// array_push($array,"valor") = adiciona um ou mais elementos no final do array
//array_combine($keys,$values) = mescla os dois arrays passados
// array_sum() = calcula a soma dos elementos de um array
// explode("/","20/10/2000") = transforma string em array
// implode("-",$array) = transforma array em string

$nomes = array("Eu"=>"Matheus","Gemeo"=>"Gabriel","Mais velho"=>"Lucas");
var_dump(is_array($nomes));

echo"<br>";

var_dump(in_array("Matheus",$nomes));

echo"<br>";

$keys = array_keys($nomes);

print_r($keys);

$values = array_values($nomes);

echo"<pre>";
print_r($values);
echo"</pre>";

$carros = array("Camaro","Porsche","Gol");
$motos = array("Kawasaki","Bmw","Honda");

$veiculos = array_merge($carros,$motos);

echo"<pre>";
print_r($veiculos);
echo"</pre>";

array_pop($veiculos);

echo"<pre>";
print_r($veiculos);
echo"</pre>";

array_shift($veiculos);

echo"<pre>";
print_r($veiculos);
echo"</pre>";

array_unshift($veiculos,"Camaro");
array_push($veiculos,"Honda");

echo"<pre>";
print_r($veiculos);
echo"</pre>";

$posicao = array("primeiro","segundo","terceiro");
$times = array("Corinthians","Botafogo","Noroeste");

$campeonato = array_combine($posicao,$times);

echo"<pre>";
print_r($campeonato);
echo"</pre>";

$soma = array(1,3,6,8);

echo array_sum($soma);

$data = "30/02/2018";
$novaData = explode("/",$data);

echo"<pre>";
print_r($novaData);
echo"</pre>";

$frase = "Meu nome não é jhonny";
$novaFrase = explode(" ",$frase);

echo"<pre>";
print_r($novaFrase);
echo"</pre>";

$arrayFrase = implode(" ",$novaFrase);

echo"<pre>";
print_r($arrayFrase);
echo"</pre>";
?>