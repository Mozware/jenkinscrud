<?php
require "../config/database.php";

$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM estudantes WHERE id = ?");
$stmt->execute([$id]);

header("Location: index.php");