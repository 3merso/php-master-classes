<?php

$nome = "Emerson";
$idade = 30;
// echo $nome . ' tem ' . $idade . ' anos';
echo "$nome tem $idade anos";

// nesse caso melhora a performance 
echo "<br>";
echo "{$nome}s tem $idade anos";
echo "<br>";

