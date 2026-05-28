<?php

use function PHPSTORM_META\type;

 include 'db.php'; ?>

<form method="post">
 ID: <input type="number" name="id"><br>
 Nome: <input type="text" name="nome"><br>
 Duração: <input type="number" name="duracao"><br>

 <input type="submit" name="update" value="Atualizar">
</form>

<?php
if (isset($_POST['update'])) {

  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $duracao = $_POST['duracao'];
try {   
  $sql = "UPDATE curso 
          SET nome='$nome', duracao=$duracao 
          WHERE id=$id";

  $conn->query($sql);

  echo "Curso atualizado com sucesso!";
} catch (Exception $e) {
  echo "Curso não encontrado.";
}   
}
?>
<br>
<small><small>
<a href='curso_insercao.php'>Insercao Curso</a>.
<a href='curso_listar.php'>Listar Cursos</a>.
<a href='curso_delete.php'>Eliminar Curso</a>
</small></small>