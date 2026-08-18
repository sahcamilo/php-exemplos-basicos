<?php

// Criar variaveis 

$produto = 80;
$quantidade = 5;
$final =


// Calculando 
$total = $produto * $quantidade;

$desconto = $total * 0.1;
// SE/SENAO

if ($total >= 200) {
    $final = $total - $desconto;
} elseif ($total < 200) {
    $final = $total;
}

// Exibindo o resultado

echo "O valor final da sua compra é de: $final";