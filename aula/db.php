<?php
$conn = new mysqli("localhost", "root", "", "db_aulas");

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>