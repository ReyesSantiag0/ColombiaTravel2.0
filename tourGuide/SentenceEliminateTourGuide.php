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

$id_persona = $_GET['id_persona'];


$eliminar_guia = "DELETE persona, fotos_actividad_turistica FROM persona, fotos_actividad_turistica AS fotos_actividad JOIN guia_turistico JOIN actividad_turistica JOIN fotos_actividad_turistica WHERE persona.id_persona = guia_turistico.id_persona AND actividad_turistica.id_guia = guia_turistico.id_guia AND actividad_turistica.id_foto_actividad = fotos_actividad_turistica.id_foto_actividad AND persona.id_persona = $id_persona";

$resultado = mysqli_query(conexion(), $eliminar_guia);

if ($resultado) {
?>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Gracias por utilizar Colombia Travel',
      text: 'Su cuenta ha sido eliminada',
    }).then(function() {
      window.location = "../Login/loginUser.html";
    });
  </script>
<?php
} else {
?>
  <script>
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'No fue posible eliminar su cuenta',
    }).then(function() {
      window.location = "../Login/loginUser.html";
    });
  </script>
<?php
}
?>