<?php include 'db.php'; ?>
<form method="post">
 Nome: <input type="text" name="nome"><br>
 Duração: <input type="number" name="duracao"><br>
<input type="submit" name="submit" value="Inserir">
</form>
<small><small>
<a href='curso_listar.php'>Listar Cursos</a>.
<a href='curso_update.php'>Atualizar Curso</a>.
<a href='curso_delete.php'>Eliminar Curso</a>
<br>
</small></small>
<?php
if (isset($_POST['submit'])) { // Verifica se o formulario foi enviado
$nome = $_POST['nome'];
$duracao = $_POST['duracao'];
$sql = "INSERT INTO curso (nome, duracao) VALUES ('$nome', $duracao)";
$conn->query($sql);
echo"Curso inserido!";
}
?>