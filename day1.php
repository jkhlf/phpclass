<?php	


echo "dia " .date ("d/m/Y");
echo "</br>"; 

 $numero = 5 ;
 $nome = " Gleison";

 echo "\n" .$numero .$nome;


 function dumbfunction ($number) {
    echo "<br>";
    echo "Tabuada do $number: <br>";

    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        echo "$number x $i = $result<br>  ";
    }
 }

 dumbfunction(9);
