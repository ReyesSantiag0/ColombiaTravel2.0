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


$eliminar_turista = "DELETE persona FROM persona JOIN turista where persona.id_persona = turista.id_persona AND persona.id_persona = $id_persona";

$resultado = mysqli_query(conexion(), $eliminar_turista);

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