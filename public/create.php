<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<title>Adicionar Estudante</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #f5f6fa;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        background: #ffffff;
        padding: 30px;
        border-radius: 16px;
        width: 600px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.05);
    }

    .header {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
    }

    .header-icon {
        width: 40px;
        height: 40px;
        background: #e9e8ff;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }

    h2 {
        margin: 0;
        color: #3b3b98;
    }

    .subtitle {
        color: #888;
        font-size: 14px;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-size: 14px;
        color: #555;
    }

    input {
        width: 100%;
        padding: 12px;
        border-radius: 10px;
        border: 1px solid #ddd;
        font-size: 14px;
    }

    .row {
        display: flex;
        gap: 10px;
    }

    .row .form-group {
        flex: 1;
    }

    .actions {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .btn-primary {
        flex: 1;
        background: #bfc3d9;
        border: none;
        padding: 14px;
        border-radius: 12px;
        color: white;
        font-weight: bold;
        cursor: pointer;
        margin-right: 10px;
    }

    .btn-secondary {
        background: #e0e0e0;
        border: none;
        padding: 14px 20px;
        border-radius: 12px;
        cursor: pointer;
        text-decoration: none;
        color: #333;
    }

    .btn-primary:hover {
        background: #9aa0c3;
    }

    .btn-secondary:hover {
        background: #d5d5d5;
    }
</style>

</head>
<body>

<div class="container">
    <div class="header">
        <div class="header-icon">👤+</div>
        <div>
            <h2>Adicionar Novo Estudante</h2>
            <div class="subtitle">Preencha os dados do novo estudante</div>
        </div>
    </div>

    <form action="save.php" method="POST">

        <div class="form-group">
            <label>Nome Completo *</label>
            <input type="text" name="nome" placeholder="Digite o nome completo do estudante" required>
        </div>

        <div class="row">
            <div class="form-group">
                <label>E-mail *</label>
                <input type="email" name="email" placeholder="exemplo@email.com" required>
            </div>

            <div class="form-group">
                <label>Idade *</label>
                <input type="number" name="idade" placeholder="Digite a idade" required>
            </div>
        </div>

        <div class="form-group">
            <label>Curso *</label>
            <input type="text" name="curso" placeholder="Digite o nome do curso" required>
        </div>

        <div class="actions">
            <button type="submit" class="btn-primary">Adicionar Estudante</button>
            <a href="index.php" class="btn-secondary">Cancelar</a>
        </div>

    </form>
</div>

</body>
</html>