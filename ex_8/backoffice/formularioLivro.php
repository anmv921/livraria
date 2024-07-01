<?php
include('../config.php');
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

    <h1>
        Insere novo livro
    </h1>

    <form enctype="multipart/form-data" action="registaLivro.php" method="post">

        <table>

            <tr>
                <td>
                    Titulo
                </td>
                <td>
                    <input type="text" name="titulo">
                </td>
            </tr>

            <tr>
                <td>
                    Sinopse
                </td>
                <td>
                    <textarea name="sinopse">
                    </textarea>
                </td>
            </tr>

            <tr>
                <td>
                    ISBN
                </td>
                <td>
                    <input type="text" name="isbn">
                </td>
            </tr>

            <tr>
                <td>
                    Preço
                </td>
                <td>
                    <input type="text" name="preco">
                </td>
            </tr>

            <tr>
                <td>
                    Stock
                </td>
                <td>
                    <input type="text" name="stock">
                </td>
            </tr>

            <tr>
                <td>
                    Numero de paginas
                </td>
                <td>
                    <input type="text" name="n_paginas">
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
                            <option value="<?php echo $linha['id_editora'] ?>">
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
                    <input type="file" name="capa_livro">
                </td>
            </tr>

        </table>

        <button type="submit">Guardar</button>

    </form>

</body>

</html>