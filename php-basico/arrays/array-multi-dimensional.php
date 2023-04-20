<?php

$usuarios = [
    [
        'nome' => 'user 1',
        'emai' => 'email@1.com',
        'endereco' => [
            'cep' => '12345-000'
        ]
    ],
    [
        'nome' => 'user 2',
        'emai' => 'email@2.com',
        'endereco' => [
            'cep' => '12345-000'
        ]
    ],
];

echo '<pre>';
var_dump($usuarios);
echo '<br>';
echo $usuarios[0]['nome'];
echo '<br>';
echo $usuarios[1]['nome'];

echo '<br>';
echo $usuarios[1]['endereco']['cep'];
