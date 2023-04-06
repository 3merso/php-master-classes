<?php

// php entende dinamicamente como string pelo valor passado
$nome = 'João';

// é fracamente tipada porque pode ser reatribuído o valor e deixar de ser string
$nome = 1;

// é possível forçar o tipo de dado conforme abaixo
$nome = (string) 10;