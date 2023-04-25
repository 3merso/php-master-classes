<?php

// funcionamento comum
for ($i = 0; $i <= 10; $i++) {
    echo $i;
    echo '<br>';
}

$lista = ['uva', 'pêra', 'abacate', 'abacaxi', 'banana', 'laranja', 'uva', 'maçã'];

for ($i = 0; $i < count($lista); $i++) {
    echo $lista[$i] . '<br>';
}