<?php

// Vetor (array simples)
$frutas = [ "maça", "banana", "uva"];

// Exibindo (usando laços)
foreach ($frutas as $indices => $fruta) {
    echo "Posição $indices: $fruta<br>";
}

// Matriz (array completo "Linhas e colunas")
$matriz = [
    ["Max Verstappen", "Lando Norris", "Oscar piastri"],
    ["Charles Leclerc, "Lewis Hamilton", "George Russel"],
    ["Fernando Alonso", "Carlos Sainz", "Ayrton Senna"]
]


// Exibindo nome dos pilotos

echo "<br><br>";
echo "Melhores pilotos de F1: <br><br>";
foreach ($matriz as $linha) {
foreach ($linha as $piloto) {
echo $piloto . " | ";
}
echo "<br>";
}