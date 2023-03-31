<?php
$nome = "Emerson";
$cargo = "DEV";
/*
HEREDOC: permite escrita com mais liberdade e
interpreta códigos dinâmicos
*/

echo <<<HEREDOC
Olá sou o $nome, atuo como $cargo <br>
HEREDOC;

// nowdoc não interpreta variáveis, códigos dinâmicos
echo <<<'NOWDOC'
Olá sou o $nome, atuo como $cargo 
NOWDOC;