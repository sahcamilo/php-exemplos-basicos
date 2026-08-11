<?php

// Laço (FOR) para Tabuada 8
for ($i =1; $i <=10; $i++) {
    echo "8 x $i = " . (8 * $i) . "<br>";
} 

// While -(enquanto) Contagem regressiva
echo "<br>";
$n = 5;
while($n >0) {
    echo $n . '<br>';
    $n--;
}

// Do while - (faça enquanto) Exwcuta ao menos 1vez

echo "<br>";
$x = 0;
do{
    echo "x vale: $x <br>";
    $x++;
} while ($x <= 10);