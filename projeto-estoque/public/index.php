<?php

// expor apenas a pasta public: php -S localhost:3030 -t public

// $_GET; superglobal para pegar parametros de url
// query string ou query params
// localhost:3030?nome=emerson
// localhost:3030?nome=emerson&idade=30

$url = isset($_GET['url']) ? $_GET['url'] : '/';

if ($url == '/') {
    echo 'Página inicial';
}

if ($url == '/produto') {
    echo 'Detalhes do produto';
}