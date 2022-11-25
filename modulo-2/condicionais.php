<?php

/** 
 * https://www.php.net/manual/pt_BR/language.operators.string.php
*/

$idade = 90;
$nome = 'Bonieky';
$sobrenome = 'Lacerda';

// CONDICIONAIS IF E ELSE
if($idade < 18) {
    echo "Menor de idade";
} else {
    echo "Maior de idade";
}


// CONDICIONAL TERNÁRIO
echo ($idade < 18) ? 'Menor de idade' : 'Maior de idade';

$resultado = ($idade < 18) ? 'Menor de idade' : 'Maior de idade';
echo $resultado;


// CONDICIONAL NULL CAO (utilizada para prevenir erros)
// isset = verifica se está setado algum valor / se existe aquela variável
$nomeCompleto = $nome;
// forma antiga
$nomeCompleto .= isset($sobrenome) ? $sobrenome : '';
// nova forma mais curta com php 7.4:
// nesse condicional ternário, se existir a primeira condição, ele já pega o primeiro valor $sobrenome, caso contrário pega o segundo valor ''
$nomeCompleto .= $sobrenome ?? '';

echo $sobrenome;

$age = "null";
$personAge = $age ?? "humano";
echo $personAge;


// CONDICIONAIS SWITCH
$tipo = 'texto';
switch($tipo) {
    case 'foto':
        echo 'Exibindo foto';
        break;
    case 'video':
        echo 'Exibindo video';
        break;
    case 'texto':
        echo 'Exibindo texto';
        break;
}

?>