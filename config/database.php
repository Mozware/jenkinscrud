<?php

$host = "10.10.3.88";
$db   = "estudantes_db";
$user = "admin";
$pass = '$Admin2026#';
$charset = "utf8mb4";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=$charset",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}