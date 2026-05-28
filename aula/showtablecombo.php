<?php


$con = mysqli_connect('localhost', 'root', '', 'db_aulas');
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

$sql = "SELECT * FROM utlizadores ";
$result = mysqli_query($con, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($con));
}


?>


<html>

<head>
    <script>
        function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            }

            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };

            xmlhttp.open("GET", "familytext.php?q=" + str, true);
            xmlhttp.send();
        }
    </script>
</head>

<body>
    <form>
        <select name="users" onchange="showUser(this.value)">
             <option value="">Select a person:</option>

            <?php

            while ($row = mysqli_fetch_assoc($result)) {
              
                //echo "<td>" . $row['nome'] . "</td>";
                echo "<option value='". $row['apelido'] ."'>". $row['apelido'] ."</option>";
                
            }
            ?>
           
          
        </select>
    </form>

    <br>

    <div id="txtHint">
        <b>Person info will be listed here.</b>
    </div>
</body>

</html>