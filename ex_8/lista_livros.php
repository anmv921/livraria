<?php
$sqlListaLivros = "select * from livros where
    stock_livro > 0 
    and act_livro=1 and del_livro=0";

$resultado = $ligacao->query($sqlListaLivros);

// var_dump($resultado);

while ($linha = mysqli_fetch_assoc($resultado)) {

?>

    <div class="lista-livros">

        <div class="esq">
            <img src="imagens/<?php 
                echo $linha['capa_livro'] 
            ?>">
        </div>

        <div class="dir">
            <h2>
                <!-- detalhe_produto.php -->

                <a href="index.php?area=detalhe&id=<?php echo $linha['id_livro']; ?>">
                    <?php echo $linha['titulo_livro']; ?>
                </a>
            </h2>

            <p>
                <?php
                echo $linha['sinopse_livro'];
                ?>
            </p>

            <span>
                <?php
                echo $linha['preco_livro'];
                ?>
            </span>

            <a href="adicionaAoCarrinho.php?id=<?php echo $linha['id_livro']; ?>" class="bt_adicionar">
                Adicionar ao carrinho
            </a>

        </div>
    </div>

<?php } ?>