<?php

    include("../objetos/livros/Livros.php");

    include('../config.php');

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    echo "<br>files:<br>";
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    if($_FILES['capa_livro']['name'] != '') {

        $nome_do_ficheiro = $_FILES['capa_livro']['name'];
        $nome_do_ficheiro_explodido = explode('.', $nome_do_ficheiro);
        $extensao = $nome_do_ficheiro_explodido[
            count($nome_do_ficheiro_explodido) - 1];
        $novo_nome = uniqid();
        $novo_nome_completo = "$novo_nome.$extensao";
        $destino = "../imagens/$novo_nome_completo";
        $origem = $_FILES['capa_livro']['tmp_name'];
        echo "origem - " . $origem;
        echo "<br>";
        echo "destino - " . $destino;
        $movido = move_uploaded_file($origem, $destino);
        echo "<br>movido - " . $movido . "<br>";
    } else {
        $novo_nome_completo = '';
    }

    $livro = new Livro(
        null,
        $_POST['editora'],
        1,
        $_POST['titulo'],
        $_POST['sinopse'],
        $_POST['isbn'],
        $_POST['preco'],
        $_POST['stock'],
        $_POST['n_paginas'],
        null,
        null,
        null,
        $novo_nome_completo 
    );

    echo "livro:<br>";
    echo "<pre>";
    print_r($livro);
    echo "</pre>";

    echo "post:<br>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    if($_POST['id_do_livro']=="") {
        $livro->save($ligacao);
    }
    else {
        $livro->setId($_POST['id_do_livro']);

        echo "VOU ATUALIZAR";

        echo "<pre>";
        print_r($livro);
        echo "</pre>";

        $livro->update($ligacao);
    }
    header('location:lista_livros.php');
?>