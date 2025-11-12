<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if ($login == "admin" && $senha == "1234") {
        $_SESSION['usuario'] = "Administrador";
    } elseif ($login == "visit" && $senha == "12345") {
        $_SESSION['usuario'] = "Visitante";
    } elseif ($login == "colab" && $senha == "123456") {
        $_SESSION['usuario'] = "Colaborador";
    } else {
        header("Location: index.php?erro=1");
        exit;
    }
}

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Principal</title>
</head>
<body>
    <h2>Seja bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h2>
    <p><a href="sair.php">Sair</a></p>
</body>
</html>
