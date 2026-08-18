<?php

// Variaveis
$media = 6.7;
$faltas = 12;

// SE/SENAO

if ($media >= 6.0 && $faltas <= 15) {
    echo "Aluno aprovado!";
} elseif ($media < 6.0 && $faltas > 15) {
    echo "Aluno reprovado!";
}