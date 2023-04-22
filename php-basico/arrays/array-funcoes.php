<?php

$listaFrutas = ['maçã', 'goiaba', 'uva'];

// contar tamanho do array
echo count($listaFrutas);
echo '<br>';
echo sizeof($listaFrutas);
echo '<br>';

// verificar se array tem um elemento - retorna true
echo in_array('uva', $listaFrutas);
echo '<br>';

// adicionar item a array existente
$carrinho = ['item: mouse'];

array_push($carrinho, 'Item: teclado');
echo '<hr>';

// somar itens do array
$precos = [12.23, 32.54, 543.65];
echo 'A soma é ' . array_sum($precos);