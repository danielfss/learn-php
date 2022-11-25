<?php

$numero = 0;

// LOOP WHILE
echo "<h2>LOOP While</h2> <br/>";
while ($numero <= 10) {
    echo "Número: " . $numero . "<br/>";

    // $numero = $numero + 1;
    // $numero += 1;
    $numero++;
}

echo '<br/>';

// LOOP FOR
echo "<h2>LOOP For</h2> <br/>";
for ($i=1; $i <= 10; $i++) { 
    echo "Número: " . $i . "<br/>";
}

echo '<br/>';

// LOOP FOREACH - EXCLUSIVO PARA TRABALHAR COM ARRAYS
$ingredientes = ['açucar', 'farinha de trigo', 'ovo', 'leite', 'fermento em pó'];

print_r($ingredientes);

echo '<br/>';

// Quando trabalhamos com array, estamos mexendo chave-valor (índice)
// a palavra ingrediente no singular é o VALOR
foreach ($ingredientes as $ingrediente) {
    echo "Item: " . $ingrediente . "<br/>";
}

echo '<br/>';

// dá para trabalhar também com a CHAVE e o VALOR no FOREACH
foreach ($ingredientes as $chave => $valor) {
    echo "Item ". $chave. ": " . $valor . "<br/>";
}

echo '<br/>';

// Tirar o zero da chave, começando pelo 1
foreach ($ingredientes as $chave => $valor) {
    echo "Item ". ($chave + 1) . ": " . $valor . "<br/>";
}

echo '<br/>';

// Transformar em uma lista HTML
echo '<h2>INGREDIENTES EM LISTA HTML</h2>';
echo '<ul>';
foreach ($ingredientes as $chave => $valor) {
    echo '<li>' . $valor . '</li>';
}
echo '</ul>';

?>