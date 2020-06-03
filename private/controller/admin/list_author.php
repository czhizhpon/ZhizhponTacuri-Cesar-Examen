<?php

    include '../../../config/conexionBD.php';

    $keyword = $_GET['aut_codigo'];
    $sql = "SELECT * FROM autores where (
        aut_codigo = $keyword )";
    
    $result = $conn->query($sql);

    echo "<tr>
            <th>Nombre</th>
            <th>Nacionalidad</th>
        </tr>";

    if($result){
        if ($result -> num_rows > 0) {

            while($row = $result -> fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['aut_nombre']  . "</td>";
                echo "<td>" . $row['aut_nacionalidad']  . "</td>";
                echo "</tr>";
                
            }
        } else {
            echo "<tr>";
            echo " <td colspan='2'> No se al autor.</td>";
        }
    }else{
        echo " <tr><td colspan='2'>Error: " . mysqli_error($conn) . "</td></tr>";
        echo "</tr>";
    }
    
    $conn->close();
?>