<?php
    include("conexion.php");
    $conn = conectar();
    $cod_estudiante = $_POST['cod_estudiante'];
    $dni = $_POST['dni'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];

    $queryUpdate = "UPDATE  alumno SET dni='$dni', nombres= '$nombres', apellidos='$apellidos' 
                    WHERE cod_estudiante='$cod_estudiante' ";
$result = mysqli_query($conn, $queryUpdate);
if ( $result) {
    Header("Location: index.php");
}

