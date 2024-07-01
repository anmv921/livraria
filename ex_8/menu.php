<div id="menu-container">
    <ul>

        <li>
            <a href="index.php">
                Livraria online
            </a>
        </li>

        <li>
            <a href="index.php">Home</a>
        </li>

        <li>
            <a href="index.php?area=lista-livros">
                Livraria
                <span>Ir para a homepage</span>
            </a>
        </li>

        <?php if (isset($_SESSION['nome_a_apresentar'])) { ?>
            <li>
                <a href="logout.php">
                    Logout
                </a>
            </li>
        <?php } else { ?>
            <li>
                <a href="index.php?area=registo">
                    Registo
                    <span>Registe-se para poder comprar</span>
                </a>
            </li>
        <?php } ?>

        <li>
            <a href="index.php?area=carrinho">
                Carrinho
                <span>Veja o que tem no seu carrinho</span>
            </a>
        </li>
        <li>
            <a href="index.php?area=contacto">
                Contactos
                <span>contacte a livraria</span>

            </a>
        </li>
    </ul>
</div>