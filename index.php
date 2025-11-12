<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header("Location: validar.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login do Sistema</h2>
    <form method="post" action="validar.php">
        <label>Login:</label>
        <input type="text" name="login" required><br><br>

        <label>Senha:</label>
        <input type="password" name="senha" required><br><br>

        <input type="submit" value="Entrar">
    </form>

    <?php
    if (isset($_GET['erro'])) {
        echo "<p style='color:red;'>Usuário ou senha inválidos!</p>";
    }
    ?>
</body>
</html>
