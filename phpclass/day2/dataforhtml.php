<?php
    // Capturando os dados do formulário
    $text = htmlspecialchars($_POST["text"]);
    $number = intval($_POST["number"]);
    $float = str_replace(',', '.', $_POST["float"]); // Substitui vírgula por ponto para garantir o formato correto

    // Converte para float
    $floatValue = floatval($float);

    // Exibindo os valores
    echo "<h2>Dados Recebidos:</h2>";
    echo "<p><strong>Texto:</strong> $text</p>";
    echo "<p><strong>Número:</strong> $number</p>";
    echo "<p><strong>Valor Decimal:</strong> $floatValue</p>";


    $welcome = false;
    $greetings = function (string $name) use ($welcome) {
    if ($welcome) {
        echo 'Hello ' . $name;
    } else {
        echo 'Get the fuck out of here ' . $name;
    }
};

$greetings('zezao');

$salary_per_hour = 60;
$time_of_service = 20;
$slack = false;

if (($time_of_service >= 35) && ($salary_per_hour >= 0) && ($slack != true)) {
    print("Condição atendida.");
} else {
    print("Condição não atendida.");
}

$a = 0;

while ($a <= 40) {
    print($a);
    $a++;
}

$array1 = [0 => 'que', '1' => 'linguagem', 2 => 'ruim'];
$array2 = [3 => 'me ajuda'];

print_r($array1 + $array2);