<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("config.php");

$nome = $_POST['nome_inserido'];
$login = $_POST['login_inserido'];
$password = $_POST['password_inserido'];
$nif = $_POST['nif_inserido'];
$email = $_POST['email_inserido'];
$morada = $_POST['morada_inserido'];
$cp = $_POST['cod_postal_inserido'];

$sql = "insert into utilizadores
(nome_utilizador, login_utilizador, pass_utilizador, nif_utilizador, email_utilizador, 
morada_utilizador, cod_postal_utilizador)
values
('$nome', '$login', MD5('$password'), '$nif', '$email', '$morada', '$cp')";

$resultado = $ligacao->query($sql);

header('location:index.php?area=registo&estado=ok');
