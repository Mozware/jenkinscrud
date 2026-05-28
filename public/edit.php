<?php
require "../config/database.php";
$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM estudantes WHERE id = ?");
$stmt->execute([$id]);
$e = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Editar Estudante</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<form class="form" action="save.php" method="POST">
    <h2>Editar Estudante</h2>

    <input type="hidden" name="id" value="<?= $e['id'] ?>">

    <input type="text" name="nome" value="<?= $e['nome'] ?>" required>
    <input type="email" name="email" value="<?= $e['email'] ?>" required>
    <input type="number" name="idade" value="<?= $e['idade'] ?>" required>
    <input type="text" name="curso" value="<?= $e['curso'] ?>" required>

    <div class="actions">
        <button type="submit">Atualizar</button>
        <a href="index.php">Cancelar</a>
    </div>
</form>

</body>
</html>