<?php

$num1 = 1;
$num2 = 2;

// OR ou || e XOR
echo $num1 == $num2 OR $num1 == $num1;
echo '<br>';
echo $num1 == $num2 || $num1 == $num1;
echo '<br>';

// No caso do XOR, apenas 1 pode ser verdadeiro
echo true XOR false;
echo '<br>';
// E lógico AND &&
echo true AND true AND true;
echo '<br>';
echo true && true && false; // retorna false
echo '<br>';

// Negação
echo !true;