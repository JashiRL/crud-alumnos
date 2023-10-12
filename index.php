<?php
    include("conexion.php");
    $conn = conectar ();

    $querySelect = "SELECT * FROM alumno";

    $alumnos = mysqli_query($conn, $querySelect);
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
            <div class="col-md-3">
                <h1 class="text-center">Datos Alumno</h1>
                <form action="insertar.php" method="post">

                    <input type="text" name="cod_estudiante" class="form-control mb-3"
                    placeholder="cod estudiante">

                    <input type="text" name="dni" class="form-control mb-3"
                    placeholder="dni">

                    <input type="text" name="nombres" class="form-control mb-3"
                    placeholder="nombres">

                    <input type="text" name="apellidos" class="form-control mb-3"
                    placeholder="apellidos">

                    <input type="submit"
                        value="Guardar"
                        class="btn btn-primary"
                        style="width: 100%;"    >
                </form> <!--post es mandar datos y get es recibir datos -->
            </div>
            <div class="col-md-9">
                <h1 class="text-center">Alumnos Registrados</h1>
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Código </th>
                            <th>DNI </th>
                            <th>Nombres </th>
                            <th>Apellidos </th>
                            <th>Acciones </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            while($alumno=mysqli_fetch_array($alumnos)) {
                        ?>
                        <tr>
                            <td><?php echo $alumno['cod_estudiante'] ?></td>
                            <td><?php echo $alumno['dni'] ?></td>
                            <td><?php echo $alumno['nombres'] ?></td>
                            <td><?php echo $alumno['apellidos'] ?></td>
                            <td>
                                <a href="actualizar.php?id=<?php echo $alumno['cod_estudiante']?>" class="btn btn-warning">Editar</a>
                                <i class="bi bi-pencil-square"></i>
                                |
                                <a href="delete.php?id=<?php echo $alumno['cod_estudiante']?>" class="btn btn-danger">Eliminar</a>
                                <i class="bi bi-trash"></i>
                            </td>
                        </tr>
                        <?php
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>