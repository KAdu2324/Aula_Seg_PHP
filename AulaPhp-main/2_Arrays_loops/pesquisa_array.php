<?php
$lista_compras = ["banana", "leite", "carne" , "berinjela", "carne"];

echo"<pre>";
var_dump($lista_compras);
echo"<pre>";

//arrays forma de buscar

$encontrou =in_array("banana", $lista_compras);// cuidado! a busca e !case sensintive
// retornara true se encontra e se nao encontra false

var_dump($encontrou);

echo"<pre>";

$encontrou = array_search("banana"$lista_compras);

var_dump($encontrou);

echo<"pre>";

$lista = [
    "pessoas" => ["thiago", "carlos", "edu"];
    "compras" => $lista_compras

];

echo"<pre>"
var_dump($lista);
echo"<pre>";


?>