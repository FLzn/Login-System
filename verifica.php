<?php

require 'conexao.php';
// require 'functions.php';

$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if(empty($email) || empty($password)){
    echo 'Informe o email e senha';
    exit;
}

$passwordHash = make_hash($password);

$stmt = $conn->prepare("SELECT id, name FROM users WHERE email = :email AND password = :password");

$stmt->bindValue(':email', $email);
$stmt->bindValue(':password', $passwordHash);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(count($users) <= 0){
    echo "Email ou senha incorretos";
    exit;
}

$users = $users[0];

session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $users['id'];
$_SESSION['user_name'] = $users['name'];

header('Location: index.php');

?>