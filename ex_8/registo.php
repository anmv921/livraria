<form method="post" action="registaUtilizador.php">

    <table>
        <tr>
            <td>
                Nome
            </td>
            <td>
                <input type="text" name="nome_inserido">
            </td>
        </tr>

        <tr>
            <td>
                Login
            </td>
            <td>
                <input type="text" name="login_inserido">
            </td>
        </tr>

        <tr>
            <td>
                Password
            </td>
            <td>
                <input type="text" name="password_inserido">
            </td>
        </tr>

        <tr>
            <td>
                NIF
            </td>
            <td>
                <input type="text" name="nif_inserido">
            </td>
        </tr>

        <tr>
            <td>
                Email
            </td>

            <td>
                <input type="text" name="email_inserido">
            </td>
        </tr>

        <tr>
            <td>
                Morada
            </td>

            <td>
                <input type="text" name="morada_inserido">
            </td>
        </tr>

        <tr>
            <td>
                Cod Postal
            </td>

            <td>
                <input type="text" name="cod_postal_inserido">
            </td>
        </tr>

    </table>

    <button>
        Registar
    </button>

</form>


<?php
if (isset($_GET['estado']) && $_GET['estado'] == 'ok') {
    echo "Registo efectuado com sucesso<br>";
}
?>