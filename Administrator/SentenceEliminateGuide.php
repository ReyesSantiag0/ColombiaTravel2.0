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

$id_guia = $_GET['id_guia'];

$consulta = mysqli_query(conexion(), "SELECT * FROM persona JOIN guia_turistico JOIN actividad_turistica JOIN fotos_actividad_turistica WHERE persona.id_persona = guia_turistico.id_persona AND actividad_turistica.id_guia = guia_turistico.id_guia AND actividad_turistica.id_foto_actividad = fotos_actividad_turistica.id_foto_actividad AND persona.id_persona = $id_guia");


if (mysqli_num_rows($consulta) == 0) {
  $eliminar_guia = mysqli_query(conexion(), "DELETE persona FROM persona JOIN guia_turistico ON persona.id_persona = guia_turistico.id_persona WHERE persona.id_persona = $id_guia");
} else {
  $eliminar_guia = mysqli_query(conexion(), "DELETE persona, fotos_actividad_turistica FROM persona, fotos_actividad_turistica AS fotos_actividad JOIN guia_turistico JOIN actividad_turistica JOIN fotos_actividad_turistica WHERE persona.id_persona = guia_turistico.id_persona AND actividad_turistica.id_guia = guia_turistico.id_guia AND actividad_turistica.id_foto_actividad = fotos_actividad_turistica.id_foto_actividad AND persona.id_persona = $id_guia");
}


if ($eliminar_guia) {
?>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Exito!!',
      text: 'Guía turístico eliminado',
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
      text: 'No fue posible eliminar al guía turístico',
    }).then(function() {
      window.location = "./homeAdministrator.php";
    });
  </script>
<?php
}
?>