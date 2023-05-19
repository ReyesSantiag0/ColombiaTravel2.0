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
$email_user = $_POST['email_user'];
$password_user = $_POST['password_user'];

$consulta = "SELECT * FROM userdata WHERE email_user  = '$email_user' AND password_user = '$password_user'";

$resultado = mysqli_query(conexion(), $consulta);
$filas = mysqli_num_rows($resultado);

if ($filas) {
  $_SESSION["email_user"] = $email_user;
  header("Location: ../User/homeUser.php");
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