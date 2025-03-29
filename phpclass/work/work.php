<?php 

//Exercício 1: Seguindo a estrutura do arranjo $carro dada acima, criar um arranjo Cidade com atributos pertinentes, e mostrar no navegador os dados relativos a estes atributos.

$cidades = array ("São Paulo" => array (
    "populacao" => 12000000,
    "area" => 1521,
    "estado" => "SP"
), "Rio de Janeiro" => array (
    "populacao" => 6000000,
    "area" => 1200,
    "estado" => "RJ"
), "Curitiba" => array (
    "populacao" => 2000000,
    "area" => 500,
    "estado" => "PR"
));

echo nl2br ("São Paulo tem "."\t".$cidades["São Paulo"]["populacao"] . " habitantes e uma área de " . $cidades["São Paulo"]["area"] . " km². O estado é " . $cidades["São Paulo"]["estado"] . ".");




 
