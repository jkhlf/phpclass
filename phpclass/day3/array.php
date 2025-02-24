<?php

$frutas = array("maça","figo","laranja","banana");
foreach ($frutas as $valor)
print " $valor";

$carro ["marca"] = 'BMW';
$carro ["modelo"] = 'Fusca';
$carro ["cor"] = 'Amarelo';
$carro ["preco"] = '550.000.000,00';
$carro ["preco"] = '500';

echo ($carro['marca']);
echo ($carro['modelo']);
echo ($carro['cor']);
echo ($carro['preco']);


$carros = array('Fusca' => array ( 'ano' => 1997, 'marca' => 'Ferrari', 'acessorios' => 'Ar condicionado'),

'Peugot' => array ( 'ano' => 1957, 'marca' => 'IDK', 'acessorios' => 'Radio'),

'Civic' => array ( 'ano' => 2008, 'marca' => 'a', 'acessorios' => 'Acendador de cigarro'),
);

echo $carros['Fusca']['acessorios'];
echo $carros['Civic']['acessorios'];
echo $carros['Peugot']['acessorios'];



?>



