<?php
$lista = ['uva', 'pêra', 'abacate', 'abacaxi', 'banana', 'laranja', 'uva', 'maçã'];

$i = 0;

while ($i <= 10) {
    echo $i . '<br>';
    $i++;
}

$i = 0;

while ($i < count($lista)) {
    echo $lista[$i] . '<br>';
    $i++;
}

// escrita alternativa
while ($i < count($lista)):
    echo $lista[$i] . '<br>';
    $i++;

endwhile;