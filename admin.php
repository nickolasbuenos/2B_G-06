<?php
session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] != 'admin') {
    header("Location: index.php");
    exit();
}

echo "<h1>Painel do Administrador</h1>";
?>