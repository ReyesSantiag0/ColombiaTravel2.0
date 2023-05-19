<?php
include "../bdColombiaTravel/conexion.php";
session_start();
$email_user = $_SESSION["email_user"];
$con = conexion();

$query_user = mysqli_query($con, "SELECT id_user FROM userdata
    WHERE email_user = '$email_user'");
$result = mysqli_fetch_array($query_user);

$querybuscar = mysqli_query($con, "SELECT * FROM userdata WHERE id_user = $result[0]");
while ($mostrar = mysqli_fetch_array($querybuscar)) {
  $name_user = $mostrar['name_user'];
  $email_user = $mostrar['email_user'];
  $password_user = $mostrar['password_user'];
  $phone_user = $mostrar['phone_user'];
  $city_user = $mostrar['city_user'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
  <link rel="icon" type="image/x-icon" href="../img/colombia.png">
  <link rel="stylesheet" href="../Desing/style.css">
  <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
</head>

<body>

  <header>
    <?php
    require_once("../header/headerUser.php");
    ?>
  </header>

  <div class="container py-5">
    <div class="card">
      <form method="post">
        <h3 class="card-header text-center">MIS DATOS PERSONALES</h3>
        <div class="card-body">
          <div class="container text-right">
            <div class="row align-items-start">
            </div>
            <div class="row align-items-start">
              <div class="col">
                <div class="input-group input-group-sm mb-3">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="name_user" id="name_user" value="<?php echo $name_user; ?>">
                </div>
              </div>
              <div class="col">
                <div class="input-group input-group-sm mb-3">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Correo electrónico</span>
                  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="email_user" id="email_user" value="<?php echo $email_user; ?>">
                </div>

              </div>
            </div>
            <div class="row align-items-start">
              <div class="col">
                <div class="input-group input-group-sm mb-3">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Contraseña</span>
                  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="password_user" id="password_user" value="<?php echo $password_user; ?>">
                </div>
              </div>
              <div class="col">
                <div class="input-group input-group-sm mb-3">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Teléfono</span>
                  <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="phone_user" id="phone_user" value="<?php echo $phone_user; ?>">
                </div>
              </div>
            </div>
            <div class="row align-items-start">
              <div class="col">
                <div class="input-group input-group-sm mb-3">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Ciudad</span>
                  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="city_user" name="city_user" value="<?php echo $city_user; ?>">
                </div>
              </div>
            </div>
          </div>
          <div class=" py-3 text-center">
            <a type="submit" class="btn btn-success" href="../User/homeUser.php">Guardar</a>
            <a class="btn btn-danger" role="button" href="../User/homeUser.php">Volver</a>
          </div>
      </form>
    </div>
    <hr>
  </div><br><br><br><br><br><br><br>

  <footer>
    <?php
    require_once("../footer/footer.php");
    ?>
  </footer>

  <script type="text/javascript" src="../Bootstrap/js/bootstrap.min.js"></script>

</body>

</html>