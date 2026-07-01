<?php
session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] != 'cliente') {
    header("Location: index.php");
    exit();
}

echo "<h1>Área do Cliente</h1>";
if (isset($_POST['tema'])) {
    $_SESSION['tema'] = $_POST['tema'];
}

$tema = $_SESSION['tema'] ?? 'claro';
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body.claro {
            background-color: white;
            color: black;
        }

        body.escuro {
            background-color: #222;
            color: white;
        }
    </style>
</head>
<body class="<?php echo $tema; ?>">

    <h1>Escolha um tema</h1>

    <form method="post">
        <button type="submit" name="tema" value="claro">
            Tema Claro
        </button>

        <button type="submit" name="tema" value="escuro">
            Tema Escuro
        </button>
    </form>

</body>
</html>