<?php
session_start();
$_SESSION["nome"] = $_POST["nome"];

$_SESSION["cpf"] = $_POST["cpf"];

$_SESSION["email"] = $_POST["email"];

$_SESSION["apelido"] = $_POST["apelido"];
header("Location: pagina3.php");
exit();
?>
