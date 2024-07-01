<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("config.php");
session_start();

// Buscar o id de utilizador a sessao
$id_cliente = $_SESSION['id_utilizador'];

// Ir buscar os ids dos livros que estao no carrinho
$lista_livros = $_SESSION['carrinho'];

// Criar um carrinho em bd e guardar o id atribuido ao carrinho
$sqlCriaCarrinho = "insert into carrinho() values();";
$resultadoCriaCarrinho = $ligacao->query($sqlCriaCarrinho);
$id_do_carrinho = $ligacao->insert_id;

echo $id_cliente . "<br>";
print_r($lista_livros);
echo "<br>";
echo $id_do_carrinho;
echo "<br>";

// Percorrer a lista de livros e inserir 
// cada livro na tabela livro_esta_em_carrinho
for ($i = 0; $i < count($lista_livros); $i++) {
    $sqlInsereLivroEmCarrinho =
        "insert into livros_esta_em_carrinho (fk_id_carrinho, fk_id_livro)
        values($id_do_carrinho, $lista_livros[$i])";

    $ligacao->query($sqlInsereLivroEmCarrinho);
}

// Inserir o registo na tabela de compras
$sqlRegistaCompra = "insert into compras(fk_id_carrinho, fk_id_utilizador)
values($id_do_carrinho, $id_cliente)";

$ligacao->query($sqlRegistaCompra);
