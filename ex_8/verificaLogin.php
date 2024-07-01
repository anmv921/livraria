<?php



include('config.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

echo "$login, $pass<br>";

$sql = "select * from utilizadores
    where login_utilizador='$login' 
    and pass_utilizador=MD5('$pass')";

echo $sql;

$resultado = $ligacao->query($sql);

$n_registos = $resultado->num_rows;

echo "<br>";

if ($n_registos == 1) {

    session_start();

    // array associativo
    $linha = mysqli_fetch_assoc($resultado);

    $nome = $linha['nome_utilizador'];
    $id = $linha['id_utilizador'];
    $_SESSION['nome_a_apresentar'] = $nome;
    $_SESSION['id_a_guardar'] = $id;
    $_SESSION['id_utilizador'] = $id;

    header('location:index.php');
} else {
    echo "login errado";
    header('location:index.php?login=erro');
}
