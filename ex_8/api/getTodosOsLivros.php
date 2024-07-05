<?php
    include('../config.php');
    include('../objetos/livros/Livros.php');

    $lista = Livro::getLivros($ligacao);

    $objectos = [];

    foreach($lista as $livro) {
        $info_livro = [
            'titulo_do_livro' => $livro->getTituloLivro(),
            'preco_do_livro' => $livro->getPreco()
        ];

        $objectos[] = $info_livro;
    }

    $lista_em_json = json_encode($objectos);

    echo $lista_em_json;
?>