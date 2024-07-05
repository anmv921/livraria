<?php
    // Get livro by id
    include('../config.php');
    include('../objetos/livros/Livros.php');
    $id = $_GET['id'];
    $livro = Livro::getLivroById($ligacao, $id);
    $info_livro = [
        'titulo_do_livro' => $livro->getTituloLivro(),
        'preco_do_livro' => $livro->getPreco(),
        'sinopse_livro' => $livro->getSinopse()
    ];
    $lista_em_json = json_encode($info_livro);
    echo $lista_em_json;
?>