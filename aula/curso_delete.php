<?php include 'db.php'; ?>

<form method="post">
    ID: <input type="number" name="id"><br>
    <input type="submit" name="delete" value="Eliminar">
</form>

<?php
if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    try {
        $sql = "DELETE FROM curso WHERE id=$id";
        $conn->query($sql);
        echo "Curso eliminado!";
    } catch (Exception $e) {
        echo "Curso não encontrado.";
    }
}
?>
<br>
<small><small>
<a href='curso_insercao.php'>Insercao Curso</a>
<a href='curso_listar.php'>Listar Cursos</a>.
<a href='curso_update.php'>Atualizar Curso</a>.
</small></small>