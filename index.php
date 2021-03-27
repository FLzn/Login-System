<?php
session_start();

require 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
</head>
<body>
    <h1>Sistema de login PHP</h1>

    <?php if (isLoggedIn()) { ?>
        <p>Olá, <?php echo $_SESSION['user_name']; ?><br>
            <a href="principal.php">Painel</a> | <a href="logout.php">Sair</a>
        </p>
    <?php }else { ?>
        <p>Olá, visitante. <a href="form-verifica.php">Login</a></p>
    <?php } ?>
</body>
</html>