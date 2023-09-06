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
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;


session_start();

// SENTENCIAS DE RECUPERACIÓN DE CUENTA
$correo_recuperacion = $_POST['correoRec'];
$consulta_email_recuperacion = "SELECT * FROM persona WHERE correo_persona = '$correo_recuperacion'";
$resultado_recuperacion = mysqli_query(conexion(), $consulta_email_recuperacion);
$verificacion_recuperacion = mysqli_fetch_array($resultado_recuperacion);

if ($verificacion_recuperacion) {
  // Generar un token único
  $nueva_contrasena = bin2hex(random_bytes(11));
  // Actualizar el token en la base de datos
  $actualizar_contrasena = mysqli_query(
    conexion(),
    "UPDATE persona 
      SET contrasena_persona = '$nueva_contrasena'
      WHERE correo_persona = '$correo_recuperacion'"
  );

  if ($actualizar_contrasena) {



    $body = <<<HTML
    <h1>Contacto desde la web</h1>
    <p>De:  / </p>
    <h2>Mensaje</h2>

HTML;

    $mailer = new PHPMailer();
    $mailer->setFrom($correo_recuperacion, $correo_recuperacion);
    $mailer->addAddress('josecamilreyes9@gmail.com', 'Sitio web');
    $mailer->Subject = "Mensaje web:";
    $mailer->msgHTML($body);
    $mailer->AltBody = strip_tags($body);
    $mailer->CharSet = 'UTF-8';
  } else {
    echo "Error al enviar el correo electrónico.";
  }



?>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Cuenta recuperada exitosamente',
      text: 'Hemos enviado la nueva contraseña a su correo electrónico',
    }).then(function() {
      window.location = "./loginUser.html";
    });
  </script>
<?php
} else {
?>
  <script>
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Error de recuperación',
    }).then(function() {
      window.location = "./loginUser.html";
    });
  </script>
<?php
}
mysqli_free_result($resultado_recuperacion);
mysqli_close(conexion());

?>