<?php

// expor apenas a pasta public: php -S localhost:3030 -t public
echo 'ok';

$url = '';

if ($url == '/') {
    echo 'Página inicial';
}

if ($url == '/produto') {
    echo 'Detalhes do produto';
}