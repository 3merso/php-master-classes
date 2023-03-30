<?php

// em aspas simples ou duplas
echo 'abc';
echo "<br>";
echo "aspas duplas";
echo gettype('uma string');
echo "<br>";

// pegar posição em uma string, iniciando do índice zero 
echo "abcde"[1];
echo "<br>";
// índice negativo php 7.1 (inicia do -1) pega do último ao primeiro caracter  
echo "abcde"[-2];
echo "<br>";

// usar contra barra pra escapar aspas.  contra barra também escapa contra barra
echo 'eu estudo \'PHP\'';
