<?php

$num = 10;

echo $num == 10 ? "Sim" : "Não";

// é possível atribuir a uma variável também
$valor = $num == 20 ? "Valor 20" : "Valor diferente";

// se houver $qtde e não for 0, o retornará 
$qtde = 30;
$valor = $qtde ?: 0;

echo $valor;
