<?php
    include('../config.php');
    include('../objetos/livros/Livros.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Formulario do livro
    </title>
    <link rel="stylesheet" href="../css/style.css">
    </link>
    <style>
        form {
            width: calc(70% - 20px);
            margin-left: 15%;
            background: #eee;
            padding: 10px;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        if(
            isset($_GET['id'])
        ) {
            $livro_obtido = 
            Livro::getLivroById(
                $ligacao,
                $_GET['id']
            );
            echo "<pre>";
            print_r($livro_obtido);
            echo "</pre>";
        }
    ?>
    <h1>
        Insere novo livro
    </h1>
    <form enctype="multipart/form-data" 
    action="registaLivro.php" method="post">
        
            <input type="hidden" 
            name="id_do_livro" 
            value="<?php
            if (isset($_GET['id'])) {
                echo $_GET['id'];
            } else {
                echo "";
            }
            ?>" >

        <table>
            <tr>
                <td>
                    Titulo
                </td>
                <td>
                    <input type="text" name="titulo" 
                    value="<?php echo (isset($_GET['id'])) ? $livro_obtido->getTituloLivro() : ""; ?>"
                    >
                </td>
            </tr>

            <tr>
                <td>
                    Sinopse
                </td>
                <td>
                    <textarea name="sinopse">
                        <?php echo (isset($_GET['id'])) ? $livro_obtido->getSinopse() : ""; ?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>
                    ISBN
                </td>
                <td>
                    <input type="text" name="isbn" 
                    value="<?php echo (isset($_GET['id'])) ? $livro_obtido->getISBN() : ""; ?>" >
                </td>
            </tr>
            <tr>
                <td>
                    Preço
                </td>
                <td>
                    <input type="text" name="preco"
                    value="<?php echo (isset($_GET['id'])) ? $livro_obtido->getPreco() : ""; ?>" >
                </td>
            </tr>
            <tr>
                <td>
                    Stock
                </td>
                <td>
                    <input type="text" name="stock"
                    value="<?php echo (isset($_GET['id'])) ? $livro_obtido->getStock() : ""; ?>" >
                </td>
            </tr>
            <tr>
                <td>
                    Numero de paginas
                </td>
                <td>
                    <input type="text" name="n_paginas"
                    value="<?php echo (isset($_GET['id'])) ? $livro_obtido->getNumPaginas() : ""; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Editora
                </td>
                <td>
                    <select name="editora">
                        <option value="0">
                            Escolha uma editora
                        </option>
                        <?php
                        $sqlEditoras = "select * from editoras";
                        $resultado = $ligacao->query($sqlEditoras);
                        while ($linha = mysqli_fetch_assoc($resultado)) {
                        ?>
                            <option value="<?php echo $linha['id_editora'] ?>"
                            <?php echo ( isset($livro_obtido) && ($linha['id_editora']==$livro_obtido->getId())) ? "selected" : ""; ?>
                            >
                                <?php
                                echo $linha['nome_editora'];
                                ?>
                            </option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Capa do Livro</td>
                <td>
                    <input type="file" name="capa_livro" >   
                </td>
                <?php 
                if(isset($_GET['id']) && 
                ($livro_obtido->getCapa()!="" || 
                !is_null($livro_obtodo->getCapa() ) ) )
                { ?>
                    <img 
                    src="../imagens/<?php echo $livro_obtido->getCapa(); ?>" 
                    width=100
                    >
                <?php } ?>
            </tr>
        </table>

        <button type="submit">
            Guardar
        </button>

    </form>

    <a href="exportaLivros.php">
        Gerar ficheiro lista de livros
    </a>

</body>
</html>