<?php
    // Obter todos os livros
    include('../config.php');
    include('../objetos/livros/Livros.php');

    $lista_livros = Livro::getLivros($ligacao);

    header("Content-Type: text/csv");
    header('Content-Disposition:attachment; filename="lista.csv"');

    //$nome_ficheiro = 'lista.csv';

    // w modo write 
    // a modo append
    $handler_ficheiro = fopen('php://output', "w");

    fputcsv($handler_ficheiro, ['Titulo', 'Sinopse', 'Preço']);

    foreach($lista_livros as $livro) {
        $titulo = $livro->getTituloLivro();
        $sinopse = $livro->getSinopse();
        $preco = $livro->getPreco();

        fputcsv($handler_ficheiro, [$titulo, $sinopse, $preco]);
    }

    fclose($handler_ficheiro);
?>