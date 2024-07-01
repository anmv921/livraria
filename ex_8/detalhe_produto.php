<?php
include('config.php');
$id_livro = $_GET['id'];

$sqlDetalhe = "select * from livros 
inner join editoras on id_editora=fk_id_editora
where id_livro=$id_livro ";

$resultado = $ligacao->query($sqlDetalhe);

$n_livros = $resultado->num_rows;

if ($n_livros != 1) {
    echo "O livro não existe";
} else {

    $linha = mysqli_fetch_assoc($resultado);
?>

    <div class="lista-livros">
        <div class="esq">
            <img src="imagens/<?php echo $linha['capa_livro'] ?>">
        </div>

        <div class="dir">
            <h2>
                <?php echo $linha['titulo_livro'] ?>
            </h2>
            <p>
                <?php echo $linha['sinopse_livro'] ?>
            </p>
            <span>
                <?php echo $linha['preco_livro'] ?>
            </span>

            <span>
                <?php echo $linha['nome_editora'] ?>
            </span>

            <a class="bt_adicionar" href="adicionaAoCarrinho.php?id=<?php echo $linha['id_livro']; ?>">
                Adicionar ao carrinho
            </a>
        </div>
    </div>

<?php } ?>