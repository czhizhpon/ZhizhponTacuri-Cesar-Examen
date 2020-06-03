<?php

    include '../../../config/conexionBD.php';

    $nombre = isset($_POST["i_book_name"]) ? mb_strtoupper(trim($_POST["i_book_name"]), 'UTF-8') : null;
    $isbn = isset($_POST["i_isbn"]) ? mb_strtoupper(trim($_POST["i_isbn"]), 'UTF-8') : null;
    $n_paginas = isset($_POST["i_num_pag"]) ? mb_strtoupper(trim($_POST["i_num_pag"]), 'UTF-8') : null;
    
    $sql = "INSERT INTO libros 
    (lib_codigo, lib_nombre, lib_ISBN, lib_numero_paginas, lib_fecha_creacion) 
    VALUES 
    (NULL, '$nombre', '$isbn', '$n_paginas', 
    current_timestamp());";

    if ($conn->query($sql) === TRUE) {
        echo "<p class='e_notice e_notice_sucess'>Se ha creado el libro correctamente.</p>";

    } else {
        if($conn->errno == 1062){
            echo "<p class='e_notice e_notice_error'>El ISBN \" " . $isbn . "\"ya están registrado en el sistema</p>";
        }else{
            echo "<p class='e_notice e_notice_error'>Error: " . mysqli_error($conn) . "</p>";
        }
    }
    
    $conn->close();
?>