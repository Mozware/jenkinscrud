<?php include 'db.php'; ?>
<h2>Lista de Cursos</h2>
<table border="1">
<tr>
<th>ID</th>
<th>Nome</th>
<th>Duração</th>
</tr>
<?php
$sql = "SELECT* FROM curso";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) { // busca um registo de cada vez
echo"<tr>
 <td>{$row['id']}</td>
 <td>{$row['nome']}</td>
 <td>{$row['duracao']}</td>
 </tr>";}
?>
</table>
<br>
<small><small>
<a href='curso_insercao.php'>Listar Cursos</a>.
<a href='curso_update.php'>Atualizar Curso</a>.
<a href='curso_delete.php'>Eliminar Curso</a>
</small></small>