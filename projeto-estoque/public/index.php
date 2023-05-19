<?php
require __DIR__ . '/../bootstrap.php';
// expor apenas a pasta public: php -S localhost:3030 -t public

// $_GET; superglobal para pegar parametros de url
// query string ou query params
// localhost:3030?nome=emerson
// localhost:3030?nome=emerson&idade=30

$url = isset($_GET['url']) ? $_GET['url'] : '/';

if ($url == '/') {
    $titulo = 'Listagem de produtos';
    include TEMPLATES . '/lista.phtml'; // apenas inclui, causa warning se não encontrado
    // require '../templates/lista.php'; // se não encontrado, fatal error
}

if ($url == '/produto') {

    $codigoProduto = isset($_GET['codigo']) ? $_GET['codigo'] : '';

    if ($codigoProduto) {
        $titulo = 'Detalhes do produto';
        $produtoDetalhe = '';
        // foreach (PRODUTOS as $p) {
        //     if ($produto['codigo'] == $codigoProduto) {
        //         $produtoDetalhe = $produto;
        //         break;
        //     }
        // }

        // alternativa ao foreach
        $produtoDetalhe = array_filter(PRODUTOS, function($produto) use ($codigoProduto) {
            return $produto['codigo'] == $codigoProduto;
        });

        $produtoDetalhe = current($produtoDetalhe);
    }

    if (!$codigoProduto || !isset($produtoDetalhe)) {
        die('Produto inexistente');
    }

    require TEMPLATES . '/produto.phtml'; 
    // echo 'Detalhes do produto';
}