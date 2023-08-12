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

$id_turista = $_GET['id_turista'];


$eliminar_turista = "DELETE persona FROM persona JOIN turista ON persona.id_persona = turista.id_persona WHERE persona.id_persona = '$id_turista'";
$resultado = mysqli_query(conexion(), $eliminar_turista);

if ($resultado) {
?>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Exito!!',
      text: 'Turista eliminado',
    }).then(function() {
      window.location = "./touristAdministrator.php";
    });
  </script>
<?php
} else {
?>
  <script>
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'No fue posible eliminar al turista',
    }).then(function() {
      window.location = "./administrators.php";
    });
  </script>
<?php
}
?>