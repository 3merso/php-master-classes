<?php

// inteiros
// negativos
echo -2;
echo "<br>";

// entende octal
echo 0777;
echo "<br>";

// entende hexadecimal
echo 0x1FF;
echo "<br>";

// float
echo 10.09;
echo "<br>";
echo 2.908;

// pra pegar o tipo do valor
echo gettype(2.9);
echo "<br>";
echo 1;

// constante pra pegar minimo e maximo de int e float
echo PHP_INT_MIN;
echo "<br>";
echo PHP_INT_MAX;
echo "<br>";
echo PHP_FLOAT_MIN;
echo "<br>";
echo PHP_FLOAT_MAX;
echo "<br>";

// andar casas decimais para direita (+) e esquerda (-)

echo 13.3e+2; // 1330
echo "<br>";
echo 13.3e-2; // 0.133
