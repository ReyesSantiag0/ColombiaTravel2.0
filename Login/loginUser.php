<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

</body>

</html>

<?php

include "../bdColombiaTravel/conexion.php";

session_start();
$correo_persona = $_POST['correo_persona'];
$contrasena_persona = $_POST['contrasena_persona'];

$consulta = "SELECT * FROM persona WHERE correo_persona  = '$correo_persona' AND contrasena_persona = '$contrasena_persona'";

$resultado = mysqli_query(conexion(), $consulta);
$filas = mysqli_fetch_array($resultado);

if ($filas) {
  if ($filas['id_rol_persona'] == 1) {
    $_SESSION["correo_persona"] = $correo_persona;
    header("Location: ../Administrator/homeAdministrator.php");
  } else if ($filas['id_rol_persona'] == 2) {
    $_SESSION["correo_persona"] = $correo_persona;
    header("Location: ../Tourist/homeUser.php");
  } else if ($filas['id_rol_persona'] == 3) {
    $_SESSION["correo_persona"] = $correo_persona;
    header("Location: ../tourGuide/homeGuide.php");
  }
} else {
?>
  <script>
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Error de autenticación',
    }).then(function() {
      window.location = "./loginUser.html";
    });
  </script>
<?php
}
mysqli_free_result($resultado);
mysqli_close(conexion());
?>