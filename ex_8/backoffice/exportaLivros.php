<?php
    // Obter todos os livros
    include('../config.php');
    include('../objetos/livros/Livros.php');

    $lista_livros = Livro::getLivros($ligacao);

    echo "<pre>";
    print_r($lista_livros);
    echo "</pre>";

    $nome_ficheiro = 'lista.txt';

    // w modo write 
    // a modo append
    $handler_ficheiro = fopen($nome_ficheiro, "a");

    foreach($lista_livros as $livro) {
        $titulo = $livro->getTituloLivro();
        $sinopse = $livro->getSinopse();
        $preco = $livro->getPreco();

        fwrite($handler_ficheiro, 
        "TITULO:$titulo ; SINOPSE:$sinopse ; PREÇO:$preco\n");
    }

    fclose($handler_ficheiro);
?>