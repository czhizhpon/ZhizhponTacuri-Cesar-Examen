<?php

    include '../../../config/conexionBD.php';

    $numero = isset($_GET["i_cap_num"]) ? mb_strtoupper(trim($_GET["i_cap_num"]), 'UTF-8') : null;
    $titulo = isset($_GET["i_cap_title"]) ? mb_strtoupper(trim($_GET["i_cap_title"]), 'UTF-8') : null;

    $lib_codigo = isset($_GET["i_isbn"]) ? mb_strtoupper(trim($_GET["i_isbn"]), 'UTF-8') : null;
    $aut_codigo = isset($_GET["i_author"]) ? mb_strtoupper(trim($_GET["i_author"]), 'UTF-8') : null;

    $sqlLib = "SELECT * FROM libros where (lib_ISBN = '$lib_codigo')";

    echo "Codigo:" . $lib_codigo;

    $resul = $conn -> query($sqlLib);
    if ($resul -> num_rows > 0){
        while($row = $resul -> fetch_assoc()) {
            $lib_codigo = $row['lib_codigo'];
        }
        $sql = "INSERT INTO capitulos 
            (cap_codigo, cap_numero, cap_titulo, cap_fecha_creacion, lib_codigo, aut_codigo) 
            VALUES 
            (NULL, '$numero', '$titulo', current_timestamp(), '$lib_codigo', $aut_codigo);";

        if ($conn->query($sql) === TRUE) {
            echo "<p class='e_notice e_notice_sucess'>Se ha creado el capitulo correctamente.</p>";

        } else {
            echo "<p class='e_notice e_notice_error'>Error: " . mysqli_error($conn) . "</p>";
        }
    } else{
        echo "<p class='e_notice e_notice_error'>No se encontró el ISBN del libro.</p>";
    }
    
    $conn->close();
?>