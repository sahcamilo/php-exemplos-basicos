<?php

// Variaveis 

$peso = 57;
$altura = 1.70;

// Calcular o imc

$imc = $peso / $altura ** 2;

// SE/SENAO

if ($imc < 18.5 ) {
    echo "Você está abaixo do peso ideal.";
} elseif ($imc >= 18.5 && $imc <=24.9 ) {
    echo "Você está no peso ideal.";
} elseif ($imc >=25 && $imc<=29.9) {
    echo "Você está com sobrepeso.";
} elseif ($imc > 30) {
    echo "Você está com obesidade.";
}