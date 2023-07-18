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
  <title>Registro turista</title>
</head>

<body>
  <section class="vh-100" style="background-image: url(../img/bg.JPG); background-size: cover;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100 ">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block " style=" border-radius: 1rem 0 0 1rem; background-image: url(../img/coverRegistroGuia.jpeg); background-size: cover;">
                <!-- <img src="../img/coverRegistroGuia.png" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; background-size: cover;" /> -->
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="form-container">
                  <!-- <img src="../img/colombia.png" width="40" alt=""> -->
                  <h3 class="title">Registrate en Colombia Travel</h3>
                  <form class="form-horizontal" aion="" method="post">
                    <div class="form-group">
                      <label>Nombres</label>
                      <input type="text" class="form-control" placeholder="Nombres" id="nombre_persona" name="nombre_persona">
                    </div>
                    <div class="form-group">
                      <label>Apellidos</label>
                      <input type="text" class="form-control" placeholder="Apellidos" id="apellido_persona" name="apellido_persona">
                    </div>
                    <div class="form-group ">
                      <label>Edad</label>
                      <input type="number" class="form-control" placeholder="Edad" id="edad_persona" name="edad_persona">
                    </div>
                    <div class="form-group">
                      <label>Género</label>
                      <select class="form-select" id="genero_persona" name="genero_persona">
                        <option selected disabled>Seleccionar</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Otro">Otro</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Teléfono</label>
                      <input type="number" class="form-control" placeholder="Teléfono" id="telefono_persona" name="telefono_persona">
                    </div>
                    <div class="form-group">
                      <label>Correo electrónico</label>
                      <input type="text" class="form-control" placeholder="Correo electrónico" id="correo_persona" name="correo_persona">
                    </div>
                    <div class="form-group">
                      <label>Contraseña</label>
                      <input type="password" class="form-control" placeholder="Contraseña" id="contrasena_persona" name="contrasena_persona">
                    </div>
                    <div class="form-group">
                      <label>Repita su contraseña</label>
                      <input type="password" class="form-control" placeholder="Contraseña" id="contrasena_persona_check" name="contrasena_persona_check">
                    </div>
                    <div class="check-terms">
                      <input type="checkbox" class="checkbox" id="terminos" name="terminos">
                      <span class="check-label">Acepto términos y condiciones</span>
                    </div>
                    <div class="pt-1 mb-4 d-grid">
                      <button class="btn btn-dark" type="submit">Crear cuenta</button>
                    </div>
                    <div class="d-flex justify-content-around align-items-center">
                      <span class="signin-link">¿Ya tienes una cuenta? <a href="../Login/loginUser.html">Iniciar sesión</a></span>
                      <span class="signin-link position-relative">¿Eres guía turístico? <a href="../tourGuide/tourGuideRegister.php">Registrate</a></span>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script type=" text/javascript" src="../Bootstrap/js/bootstrap.min.js">
  </script>

</body>

</html>


<?php

include "../bdColombiaTravel/conexion.php";

if (!empty($_POST)) {
  if (empty($_POST['nombre_persona']) || empty($_POST['apellido_persona']) || empty($_POST['edad_persona']) || empty($_POST['genero_persona']) || empty($_POST['telefono_persona']) || empty($_POST['correo_persona']) || empty($_POST['contrasena_persona']) || empty($_POST['contrasena_persona_check']) || !isset($_POST['terminos'])) {
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

    $nombre_persona = $_POST['nombre_persona'];
    $apellido_persona = $_POST['apellido_persona'];
    $edad_persona = $_POST['edad_persona'];
    $genero_persona = $_POST['genero_persona'];
    $telefono_persona = $_POST['telefono_persona'];
    $correo_persona = $_POST['correo_persona'];
    $contrasena_persona = $_POST['contrasena_persona'];

    if ($_POST['contrasena_persona'] != $_POST['contrasena_persona_check']) {
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
      $query = mysqli_query(conexion(), "SELECT * FROM persona where correo_persona = '$correo_persona'");
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
        $query_insert_client = mysqli_query(conexion(), "INSERT INTO persona (nombre_persona, apellido_persona, edad_persona, genero_persona, telefono_persona, correo_persona, contrasena_persona, id_rol_persona) 
        VALUES ('$nombre_persona','$apellido_persona','$edad_persona','$genero_persona','$telefono_persona', '$correo_persona', '$contrasena_persona', 2)");

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