<?php

// PDO - PHP Data object
$conexao = new PDO(
    "mysql:dbname=controle_estoque;host=127.0.0.1",
    "root", ""
);
var_dump($conexao);