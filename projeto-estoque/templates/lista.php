<!-- Página inicial

< ?php var_dump(PRODUTOS); -->

<html>
    <head>
        <title>Listagem de produtos</title>
    </head>
    <body>
        <?php foreach (PRODUTOS as $p) {
            echo $p['nome'] . '-' . $p['preco']; 
         } ?>
    </body>
</html>