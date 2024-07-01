<?php
if (isset($_SESSION['carrinho'])) {
?>

    <table cellpadding=1 cellspacing=1 border=1>
        <tr>
            <td>
                Livro
            </td>
            <td>
                Preço
            </td>
        </tr>

        <?php
        $livros_no_carrinho = $_SESSION['carrinho'];

        $preco_total = 0.0;

        for ($i = 0; $i < count($livros_no_carrinho); $i++) {
            $sql = "select * from livros where id_livro = $livros_no_carrinho[$i]";
            // $ligacao definida no index
            $resultado = $ligacao->query($sql);
            $linha = mysqli_fetch_assoc($resultado);
            echo "<tr><td>" . $linha['titulo_livro'] . "</td><td>" . $linha['preco_livro'] . " &euro;</td></tr>";

            $preco_total += $linha['preco_livro'];
        }
        ?>

        <tfoot>
            <tr>
                <th scope="row" colspan="1">
                    Total
                </th>
                <td>
                    <?php
                    echo $preco_total;
                    ?>
                    &euro;
                </td>
            </tr>
        </tfoot>
    </table>

    <a href="finalizaCompra.php">
        FINALIZAR
    </a>

<?php } else {
    echo "carrinho vazio";
}

?>