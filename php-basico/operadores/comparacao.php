<?php

$num1 = 30;
$num2 = 40;

// operadores de comparacao

$num1 == $num2; // igualdade de valor
$num1 === $num2; // igualdade de valor e tipo
$num1 != $num2; // diferenca de valor
$num1 !== $num2; // diferenca de valor e tipo
$num1 <> $num2; // diferenca de valor
$num1 < $num2; // menor que
$num1 > $num2; // maior que
$num1 <= $num2; // menor ou igual que
$num1 >= $num2; // maior ou igual que

// operador spaceship - a partir do php 7
// quando o primeiro é maior que o segundo, retorna 1
echo 1 <=> 0;
echo '<br>';
// quando o primeiro é menor que o segundo, retorna -1
echo 1 <=> 2;
echo '<br>';
// quando forem iguais, retorna 0
echo 1 <=> 1;
echo '<br>';