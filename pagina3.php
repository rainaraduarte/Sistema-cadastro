<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 3</title>
    <style type="text/css">
        h1 , p{
            text-align: center;
            }
        </style>
</head>
<body>
<?php
session_start();
if (isset($_SESSION["apelido"])) {
    echo "<h1>Olá, ".$_SESSION["apelido"]."! Confira os dados cadastrados:</h1>";
}

else {
    echo "<p>Sessão não existe</p>";
}
if (isset($_SESSION["nome"])) {
    echo "<p>Nome: ".$_SESSION["nome"]."</p>";
}

else {
    echo "<p>Sessão não existe</p>";
}


if (isset($_SESSION["cpf"])) {
    echo "<p>CPF: ".$_SESSION["cpf"]."</p>";
}

else {
    echo "<p>Sessão não existe</p>";
}

if (isset($_SESSION["email"])) {
    echo "<p>Email: ".$_SESSION["email"]."</p>";
}

else {
    echo "<p>Sessão não existe</p>";
}

?>
</body>
</html>
