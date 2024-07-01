<?php
    include('../config.php');
    include('../objetos/livros/Livros.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $lista_de_livros =
        Livro::getLivros(
            $ligacao
        );

        // echo "<pre>";
        // print_r($lista_de_livros);
        // echo "</pre>";

        foreach($lista_de_livros as $livro) { ?>

            <ul>
                <li>
                    <a href="formularioLivro.php?id=<?php echo $livro->getId(); ?>" >
                        <?php echo $livro->getTituloLivro(); ?>
                    </a>
                </li>
            </ul>

        <?php 
            }
        ?>
</body>
</html>