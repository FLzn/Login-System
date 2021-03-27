<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sistema de Login PHP</title>
</head>
<body>
    <h1>Login</h1>

    <form action="verifica.php" method="post">
        <label for="email">Email: </label><br>
        <input type="text" name="email" id="email" required>
        <br><br>
        <label for="password">Senha:</label>
        <br>
        <input type="password" name="password" id="password" required>
        <br><br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>