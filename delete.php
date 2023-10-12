<?php
    include("conexion.php");
    $conn = conectar();
    $cod_estudiante = $_GET['id'];
    $queryDelete = "DELETE FROM alumno WHERE cod_estudiante='$cod_estudiante'";
    $result = mysqli_query($conn, $queryDelete);    
    if ($result) {
        Header("Location: index.php");
    }
?>