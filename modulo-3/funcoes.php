<?php

// CRIANDO A FUNÇÃO
function subsequente() {

    for ($q=0;$q<10;$q++) {
        echo $q."<br/>";
    }

    echo "<hr/>";
}

// CHAMANDO A FUNÇÃO
subsequente();

// FUNÇÃO COM PARÂMETROS
function somar($n1, $n2) {
    $total = $n1 + $n2;
    return $total;
}

$soma = somar(10, 5);
echo $soma;

echo '<br/>';

$x = somar(1, 4);
$y = somar(8, 2);
$z = somar($x, $y);

echo '<br/>';

echo $z;