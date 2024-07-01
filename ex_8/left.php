<div>
    hugo 123
</div>

<?php

if (isset($_SESSION['nome_a_apresentar'])) {
    echo "Ola Sr(a): " .
        $_SESSION['nome_a_apresentar'];
} else { ?>

    <form action="verificaLogin.php" method="post">
        <table>
            <tr>
                <td>
                    Login
                </td>

                <td>
                    <input type="text" name="login">
                </td>
            </tr>
            <tr>
                <td>
                    Password
                </td>

                <td>
                    <input type="password" name="pass">
                </td>
            </tr>
        </table>
        <button>
            Entrar
        </button>
    </form>

<?php
}
?>


<?php
if (isset($_GET['login']) && $_GET['login'] == 'erro') {
    echo "Login errado";
}
?>