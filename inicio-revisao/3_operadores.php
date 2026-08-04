<?php

// Criando variáveis
$idade =19;
$temDocumentos =false;

// Estrutura de decisão (operador E)
if ($idade >= 18 && $temDocumentos) {
    echo "Pode tirar a carteira";
} else {
    echo "Não pode tirar carteira";
}

// Estrutura de decisão (operador OU)
if ($idade >= 18 || $temDocumentos) {
    echo "\nPode tirar a carteira";
} else {
    echo "Não pode tirar carteira";
}

// Operador negação 
$presente = false;

if (!$presente) {
    echo "\nO aluno está presente";
} else {
    echo "\nO aluno está ausente";
}