<?php
session_start();

require 'check.php';
require_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel | Sistema de login</title>
</head>
<body>
    <h1>Painel do Usuário</h1>
    <p>Bem-vindo ao seu painel, <?php echo $_SESSION['user_name']; ?> | <a
href="logout.php">Sair</a></p>
</body>
</html>