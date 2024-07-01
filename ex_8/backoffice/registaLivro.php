<?php

include("../objetos/livros/Livros.php");

include('../config.php');

echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "<pre>";
print_r($_FILES);
echo "</pre>";

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
    $_FILES['capa_livro']['name']
);


echo "<pre>";
print_r($livro);
echo "</pre>";

$livro->save($ligacao);
