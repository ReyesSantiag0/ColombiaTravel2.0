<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eliminar Administrador</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

</body>

</html>


<?php
include "../bdColombiaTravel/conexion.php";

$id_admin = $_GET['id_admin'];


$eliminar_administrador = "DELETE persona FROM persona JOIN administrador ON persona.id_persona = administrador.id_persona where persona.id_persona = '$id_admin'";
$resultado = mysqli_query(conexion(), $eliminar_administrador);

if ($resultado) {
?>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Exito!!',
      text: 'Administrador Eliminado',
    }).then(function() {
      window.location = "./administrators.php";
    });
  </script>
<?php
} else {
?>
  <script>
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'No fué posible eliminar el administrador',
    }).then(function() {
      window.location = "./administrators.php";
    });
  </script>
<?php
}
?>