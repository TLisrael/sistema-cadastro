<?php

require_once "vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();
$host = 'localhost';
$user = getenv('USER');
$pass = getenv('PASS');
$dbname = 'cadastro';
$port = '3306';

/*
 *
 * Tenta conexão com banco de dados, caso seja um sucesso, retorna que está funcionando
 * Caso contrário, retorna o erro que foi encontrado.
 *
 */
try {
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    // echo "Funcionando!";
} catch (PDOException $err) {
    echo $err->getMessage();
}
?>