<?php
require "../config/database.php";

$total = $pdo->query("SELECT COUNT(*) FROM estudantes")->fetchColumn();
$mediaIdade = $pdo->query("SELECT ROUND(AVG(idade)) FROM estudantes")->fetchColumn();
$cursos = $pdo->query("SELECT COUNT(DISTINCT curso) FROM estudantes")->fetchColumn();

$estudantes = $pdo->query("SELECT * FROM estudantes ORDER BY id DESC")->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Dashboard de Estudantes</title>
    <!-- <link rel="stylesheet" href="../assets/css/style.css"> -->
</head>
<body>

<style>

    body {
    font-family: Arial, Helvetica, sans-serif;
    background: #f4f7ff;
    padding: 40px;
}

header.top {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.btn-primary {
    background: #4f46e5;
    color: #fff;
    padding: 12px 18px;
    border-radius: 10px;
    text-decoration: none;
}

.cards {
    display: flex;
    gap: 20px;
    margin: 30px 0;
}

.card {
    background: #fff;
    padding: 20px;
    border-radius: 12px;
    flex: 1;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
}

.table-container {
    background: #fff;
    padding: 25px;
    border-radius: 12px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 14px;
    border-bottom: 1px solid #eee;
}

.btn-edit { color: #2563eb; margin-right: 10px; }
.btn-delete { color: #dc2626; }

.form {
    max-width: 500px;
    margin: auto;
    background: #fff;
    padding: 30px;
    border-radius: 12px;
}

.form input {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border-radius: 8px;
    border: 1px solid #ddd;
}

.actions {
    display: flex;
    justify-content: space-between;
}



</style>

<header class="top">
    <div>
        <h1>Dashboard de Estudantes</h1>
        <p>Gerencie todos os estudantes cadastrados no sistema</p>
    </div>
    <a href="create.php" class="btn-primary">+ Adicionar Estudante</a>
</header>

<section class="cards">
    <div class="card">
        <p>Total de Novos Estudantes</p>
        <h2><?= $total ?></h2>
    </div>
    <div class="card">
        <p>Cursos Ativos</p>
        <h2><?= $cursos ?></h2>
    </div>
    <div class="card">
        <p>Idade Média</p>
        <h2><?= $mediaIdade ?></h2>
    </div>
</section>

<section class="table-container">
    <h2>Lista de Estudantes</h2>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Idade</th>
                <th>Curso</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($estudantes as $e): ?>
            <tr>
                <td><?= htmlspecialchars($e['nome']) ?></td>
                <td><?= htmlspecialchars($e['email']) ?></td>
                <td><?= $e['idade'] ?> anos</td>
                <td><?= htmlspecialchars($e['curso']) ?></td>
                <td>
                    <a href="edit.php?id=<?= $e['id'] ?>" class="btn-edit">✏️</a>
                    <a href="delete.php?id=<?= $e['id'] ?>" class="btn-delete"
                       onclick="return confirm('Deseja remover este estudante?')">🗑️</a>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</section>

</body>
</html>