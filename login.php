<?php
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if ($usuario == "admin" && $senha == "123") {
    $_SESSION['usuario'] = $usuario;
    header("Location: admin.php");
    exit();
}

if ($usuario == "cliente" && $senha == "456") {
    $_SESSION['usuario'] = $usuario;
    header("Location: cliente.php");
    exit();
}

echo "Usuário ou senha inválidos!";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header normal</title>
</head>
<body>
    <div><h1>Header Normal</h1></div>
    
</body>
</html>