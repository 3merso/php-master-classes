<?php

// PDO - PHP Data object
$conexao = new PDO(
    "mysql:dbname=controle_estoque;host=127.0.0.1",
    "root", ""
);
var_dump($conexao);

// CRIAÇÃO DA TABELA DE PRODUTOS
// CREATE TABLE produtos(
//     id INT(11) PRIMARY KEY AUTO_INCREMENT
//     nome VARCHAR(255) NOT NULL,
//     descricao VARCHAR(255) NULL,
//     sobre LONGTEXT,
//     preco FLOAT(10, 2),
//     status TINYINT(1),
//     criado_em DATETIME,
//     atualizado_em DATETIME,
// )engine=innoDB;