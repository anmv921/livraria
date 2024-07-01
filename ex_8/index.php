<?php
session_start();
include('config.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Livraria Curso PHP</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>

    <div id="header">
        <div id="navigation">
            <?php
            include("menu.php");
            ?>
            <div class="clear"></div>
        </div>
    </div>

    <div id="wrap">

        <div id="navcontainer">
            <?php
            include("left.php");
            ?>
        </div>

        <div id="content">
            <?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            // if(isset($_GET['area']))
            if ($_GET) {
                $area_a_desenhar = $_GET['area'];
                switch ($area_a_desenhar) {
                    case 'lista-livros': {
                            include('lista_livros.php');
                        }
                        break;
                    case 'registo': {
                            include('registo.php');
                        }
                        break;
                    case 'carrinho': {
                            include('carrinho.php');
                        }
                        break;
                    case 'contacto': {
                            include('contactos.php');
                        }
                        break;
                    case 'detalhe': {
                            include('detalhe_produto.php');
                        }
                        break;
                    default: {
                            include('404.php');
                        }
                }
            } else {
                include('home.php');
            }
            ?>
        </div>
        <!-- End div content -->

        <div id="subcontent">
            <?php
            include('right.php')
            ?>
        </div>

        <div id="footer">
            <?php include('footer.php') ?>
        </div>

    </div>
    <!-- End div wrap -->

</body>

</html>