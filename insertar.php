<?php
    include("conexion.php");
    $conn = conectar();
    $cod_estudiante = $_POST['cod_estudiante'];
    $dni = $_POST['dni'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];

    $queryInsertar = "INSERT INTO alumno VALUES('$cod_estudiante', '$dni', '$nombres', '$apellidos')";
$result = mysqli_query($conn, $queryInsertar);
if ( $result) {
    Header("Location: index.php");
}


