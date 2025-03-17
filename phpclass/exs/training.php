<!--
1. Escrever código que possua uma função que receba como argumentos o
 nome e o salário de funcionários de uma empresa. A aplicação deve imprimir
 em cada linha o nome e o respectivo salário dos funcionários (pelo menos 3).

2. Escrever outra versão do código proposto acima, sendo que tanto os nomes 
 quanto os salários estejam originalmente em arranjos.

3. Dada uma relação de 10 pares funcionário – salário, escrever versão do código
 em que sejam impressos os pares onde o salário seja maior que R$1000.00.

4. Escrever código que mostre os elementos de um arranjo fora da ordenação dos
índices dos elementos através do uso do “sort”.

5. Escrever outra versão do código proposto acima, retornando a quantidade de 
elementos do arranjo através do uso do “count”.

6. Ainda considerando o arranjo do exercício 4, extrair uma amostra de elementos
do mesmo através do uso do “array_slice”.  

7a. Escrever código que represente a abstração de um condomínio, com atributos
pertinentes e os respectivos métodos set() e get() para inserir e retornar os valores
dos atributos.

7b. Implementar a abstração de uma padaria, também com atributos pertinentes e
os métodos de manipulação dos atributos.

7c. Criar aplicação que acesse através de variáveis de instância as classes Condomínio e Padaria, e que possa inserir valores aos atributos de ambas e mostrá-los no
navegador

-->



<?php

//1
 function salary($name, $salary) {
    echo "Nome: {$name}, Salário: {$salary}";
 }

 //2
 function printEmployeesFromArrays($names, $salarys) {
    for ($i = 0; $i < count($names); $i++){
        echo "Nome: {$names[$i]}, Salário: {$salarys[$i]}";
    }
 }

 //3

 function printHighSalaries($employees){
    foreach($employees as $name => $salary){
        if($salary > 1000){
            echo "Nome: $name, Salario: $salary";
        }
    }
 }

 //4

 function showSortedArray() {
    $arr=["teste","teste2","teste3"];
    print_r($arr);
    sort($arr);
 }

 showSortedArray();

 //5

 function shorSortedArrayWhitCount() {
    $arr=[5,3,7,1,9,20,12,15];

   echo "Original";
   print_r($arr);

   sort($arr);

   $count = count($arr);
   echo "Number of elements in the array: $count";

 }

//6 



//POO
//7a

class Condomínio {
   private $name;
   private $adress;
   private $numberOfUnits;
   private $monthlyFee;


public function setName($name) {
   $this->$name = $name;
}

public function setNumberofUnits($numberOfUnits) {
   $this->numberOfUnits = $numberOfUnits;
}

public function setAdress($adress) {
   $this->adress = $adress;
}

public function getName() {
   return $this->name;
}

public function getAdress() {
return $this->adress;
}

}

//7b

class Padaria {
   private $name;
   private $adress;
   private $openingHours;
   private $specialties;


   public function setName($name){
      $this->$name = $name;
   }
}


//7c
//Another file.