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

$id_actividad = $_GET['id_actividad'];


$eliminar_actividad = "DELETE fotos_actividad_turistica FROM fotos_actividad_turistica JOIN actividad_turistica ON fotos_actividad_turistica.id_foto_actividad = actividad_turistica.id_foto_actividad  where actividad_turistica.id_actividad = '$id_actividad'";

$resultado = mysqli_query(conexion(), $eliminar_actividad);

if ($resultado) {
?>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Exito!!',
      text: 'Administrador Eliminado',
    }).then(function() {
      window.location = "./homeAdministrator.php";
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
      window.location = "./homeAdministrator.php";
    });
  </script>
<?php
}
?>