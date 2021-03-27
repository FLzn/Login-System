<?php

$db = 'login_joabe';
$username = 'root';
$password = '';
$host = 'localhost';

try{

    $conn = new PDO('mysql:host=' . $host . ';dbname=' . $db .';charset=utf8', $username, $password);
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_EXCEPTION);

    ini_set('display_errors', true);
    error_reporting(E_ALL);

    require_once 'functions.php';

}catch(PDOException $e){
    echo "Falha: ".$e->getMessage();
}
?>