<?php
session_start();
$id_livro = $_GET['id'];

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

array_push($_SESSION['carrinho'], $id_livro);

header('location:index.php?area=carrinho');
