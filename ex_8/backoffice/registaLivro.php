<?php
    include("../objetos/livros/Livros.php");
    include('../config.php');
    if($_FILES['capa_livro']['name'] != '') {

        $nome_do_ficheiro = $_FILES['capa_livro']['name'];
        $nome_do_ficheiro_explodido = explode('.', $nome_do_ficheiro);
        $extensao = $nome_do_ficheiro_explodido[
            count($nome_do_ficheiro_explodido) - 1];
        $novo_nome = uniqid();
        $novo_nome_completo = "$novo_nome.$extensao";
        $destino = "../imagens/$novo_nome_completo";
        $origem = $_FILES['capa_livro']['tmp_name'];
        $movido = move_uploaded_file($origem, $destino);
        
    } else {
        $novo_nome_completo = '';
    }

    $livro = new Livro(
        null,
        $_POST['editora'],
        $_POST['genero'],
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

    $erro = false;
    if($_POST['editora'] == 0 ) {
        echo "<br>Por favor escolha uma editora<br>";
        $erro = true;
    } 
    if ($_POST['genero'] == 0) {
        echo "<br>Por favor escolha um genero<br>";
        $erro = true;
    } 
    if (!$erro) {
        if($_POST['id_do_livro']=="") {
            $livro->save($ligacao);
        }
        else {
            $livro->setId($_POST['id_do_livro']);
            echo "VOU ATUALIZAR";
            $livro->update($ligacao);
        }
        header('location:lista_livros.php');
    }

    
?>