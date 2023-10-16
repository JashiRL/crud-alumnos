<?php
    include("conexion.php");
    $conn = conectar();

    $id = $_GET['id'];
    $queryAlumno = "SELECT * FROM alumno WHERE cod_estudiante='$id'";
    $resultado = mysqli_query($conn, $queryAlumno);
    $alumno = mysqli_fetch_array($resultado);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>CRUD + PHP + ALUMNOS</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Datos Alumno</h1>
                <form action="update.php" method="post">

                    <input type="hidden" name="cod_estudiante" class="form-control mb-3"
                    placeholder="cod estudiante" value="<?php echo $alumno['cod_estudiante'] ?>">

                    <input type="text" name="dni" class="form-control mb-3"
                    placeholder="dni" value="<?php echo $alumno['dni'] ?>">

                    <input type="text" name="nombres" class="form-control mb-3"
                    placeholder="nombres" value="<?php echo $alumno['nombres'] ?>">

                    <input type="text" name="apellidos" class="form-control mb-3"
                    placeholder="apellidos" value="<?php echo $alumno['apellidos'] ?> ">

                    <input type="submit"
                        value="Guardar"
                        class="btn btn-primary"
                        style="width: 100%;"    >
                </form> <!--post es mandar datos y get es recibir datos -->
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>