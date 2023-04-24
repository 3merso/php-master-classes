<?php

$listaFrutasUm = ['uva'];
$listaFrutasDois = ['pera', 'maçã'];

$listaFrutas = $listaFrutasUm + $listaFrutasDois;

// nesse caso o índice diferente é inserido no array
// se índice igual, o primeiro tem precedência maior
print_r($listaFrutas);

// comparação com 2 iguais verifica o conteúdo 
var_dump($listaFrutasUm == $listaFrutasDois);

// comparação com 3 iguais verifica o conteúdo e a ordem, na mesma posição 
var_dump($listaFrutasUm === $listaFrutasDois);