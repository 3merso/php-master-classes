<?php

$usuarios = [
    [
        'nome' => 'user 1',
        'email' => 'email@1.com',
        'endereco' => [
            'cep' => '12345-000'
        ]
    ],
    [
        'nome' => 'user 2',
        'email' => 'email@2.com',
        'endereco' => [
            'cep' => '12345-000'
        ]
    ],
];

$mensagem = '';

foreach ($usuarios as $u) {
    $mensagem .= $u['nome'];
    $mensagem .= " tem o e-mail " . $u['email'];
    $mensagem .= " e o CEP " . $u['endereco']['cep'];
    $mensagem .= '<hr>';
}

echo $mensagem;
