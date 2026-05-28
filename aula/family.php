<?php
$q = intval($_GET['q']);
$con = mysqli_connect('localhost', 'root', '', 'db_aulas');
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}
$sql = "SELECT * FROM utlizadores WHERE id =$q";
$result = mysqli_query($con, $sql);
if (!$result) {
    die("Query failed: " . mysqli_error($con));
}
echo "<table border='1'>
<tr>
<th>Nome</th>
<th>Apelido</th>
<th>Idade</th>
<th>Cidade</th>
<th>Trabalho</th>
</tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['nome'] . "</td>";
    echo "<td>" . $row['apelido'] . "</td>";
    echo "<td>" . $row['idade'] . "</td>";
    echo "<td>" . $row['cidade'] . "</td>";
    echo "<td>" . $row['trabalho'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
