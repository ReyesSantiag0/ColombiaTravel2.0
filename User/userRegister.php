<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Desing/style.css">
  <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="icon" type="image/x-icon" href="../img/colombia.png">
  <title>Registro</title>
</head>

<body>
  <section class="vh-100" style="background-image: url(../img/bg02.JPG); background-size: cover;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100 ">
        <div class="col-md-offset-3 col-md-6">
          <div class="form-container">
            <h3 class="title">Registrate en Colombia Travel</h3>
            <form class="form-horizontal" action="" method="post">
              <div class="form-group">
                <label>Nombre Completo</label>
                <input type="text" class="form-control" placeholder="Nombres" id="name_user" name="name_user">
              </div>
              <div class="form-group">
                <label>Correo electrónico</label>
                <input type="email" class="form-control" placeholder="Email" id="email_user" name="email_user">
              </div>
              <div class="form-group">
                <label>Contraseña</label>
                <input type="password" class="form-control" placeholder="Contraseña" id="password_user" name="password_user">
              </div>
              <div class="form-group">
                <label>Confirmar contraseña</label>
                <input type="password" class="form-control" placeholder="Confirmar contraseña" id="passwordA_user" name="passwordA_user">
              </div>
              <h4 class="sub-title">Información Personal</h4>
              <div class="form-group">
                <label>Número de teléfono</label>
                <input type="text" class="form-control" placeholder="Número de teléfono" id="phone_user" name="phone_user">
              </div>
              <div class="form-group">
                <label>Ciudad de origen</label>
                <input type="text" class="form-control" placeholder="Ciudad origen" id="city_user" name="city_user">
              </div>
              <div class="check-terms">
                <input type="checkbox" class="checkbox" id="terms" name="terms">
                <span class="check-label">Acepto términos y condiciones</span>
              </div>
              <span class="signin-link">¿Ya tienes una cuenta? <a href="../Login/loginUser.html">Iniciar sesión</a></span>
              <button class="btn btn-dark btn-block">Crear cuenta</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script type="text/javascript" src="../Bootstrap/js/bootstrap.min.js"></script>

</body>

</html>


<?php

include "../bdColombiaTravel/conexion.php";

if (!empty($_POST)) {
  $alert = '';
  if (empty(empty($_POST['name_user']) || empty($_POST['email_user']) || $_POST['password_user']) || empty($_POST['passwordA_user']) || empty($_POST['phone_user']) || empty($_POST['city_user']) || !isset($_POST['terms'])) {
?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Todos los campos son obligatorios',
      })
    </script>
    <?php
  } else {

    $name_user = $_POST['name_user'];
    $email_user = $_POST['email_user'];
    $password_user = $_POST['password_user'];
    $phone_user = $_POST['phone_user'];
    $city_user = $_POST['city_user'];

    if ($_POST['password_user'] != $_POST['passwordA_user']) {
    ?>
      <script>
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Las contraseñas no coinciden',
        })
      </script>
      <?php
    } else {

      $query = mysqli_query(conexion(), "SELECT * FROM userdata where email_user = '$email_user'");
      $result = mysqli_fetch_array($query);
      if ($result > 0) {
      ?>
        <script>
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'El correo ya existe',
          })
        </script>
        <?php
      } else {

        $query_insert_client = mysqli_query(conexion(), "INSERT INTO userdata (name_user, email_user, password_user, phone_user, city_user) 
        VALUES ('$name_user','$email_user','$password_user','$phone_user','$city_user')");

        if ($query_insert_client) {
        ?>
          <script>
            Swal.fire('Usuario creado correctamente')
          </script>
        <?php
        } else {
        ?>
          <script>
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'No fué posible crear el usuario',
            })
          </script>
<?php
        }
      }
    }
  }
}
?>