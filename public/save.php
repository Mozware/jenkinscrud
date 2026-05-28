<?php
require "../config/database.php";

if (!empty($_POST['id'])) {
    $sql = "UPDATE estudantes SET nome=?, email=?, idade=?, curso=? WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['nome'],
        $_POST['email'],
        $_POST['idade'],
        $_POST['curso'],
        $_POST['id']
    ]);
} else {
    $sql = "INSERT INTO estudantes (nome, email, idade, curso) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['nome'],
        $_POST['email'],
        $_POST['idade'],
        $_POST['curso']
    ]);
}

header("Location: index.php");