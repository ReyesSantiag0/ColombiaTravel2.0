<?php
include "../bdColombiaTravel/conexion.php";
session_start();

$id_actividad = $_GET['id_actividad'];

$correo_persona = $_SESSION['correo_persona'];


$sql = ("SELECT * FROM actividad_turistica  JOIN guia_turistico  JOIN persona  JOIN fotos_actividad_turistica WHERE persona.id_persona = guia_turistico.id_persona  AND actividad_turistica.id_guia = guia_turistico.id_guia AND actividad_turistica.id_foto_actividad = fotos_actividad_turistica.id_foto_actividad AND actividad_turistica.id_actividad = '$id_actividad'");
$query = mysqli_query(conexion(), $sql);
$i = 0;

while ($dato = mysqli_fetch_array($query)) {
  $i++;
  $nombre_actividad = $dato['nombre_actividad'];
  $idioma_actividad = $dato['idioma_actividad'];
  $tiempo_actividad = $dato['tiempo_actividad'];
  $que_incluye_actividad = $dato['que_incluye_actividad'];
  $ubicacion_actividad = $dato['ubicacion_actividad'];
  $detalle_ubicacion_actividad = $dato['detalle_ubicacion_actividad'];
  $resena_actividad = $dato['resena_actividad'];
  $fecha_actividad = $dato['fecha_actividad'];
  $requisito_actividad = $dato['requisito_actividad'];
  $recomendacion_actividad = $dato['recomendacion_actividad'];
  $politica_actividad = $dato['politica_actividad'];
  $precio_actividad = $dato['precio_actividad'];
  $foto01_actividad = $dato['foto01_actividad'];
  $foto02_actividad = $dato['foto02_actividad'];
  $foto03_actividad = $dato['foto03_actividad'];
  $foto04_actividad = $dato['foto04_actividad'];
  $foto05_actividad = $dato['foto05_actividad'];

  $id_actividad_pago = $dato['id_actividad'];


  $nombre_persona_guia = $dato['nombre_persona'];
  $apellido_persona_guia = $dato['apellido_persona'];
  $correo_persona_guia = $dato['correo_persona'];
  $telefono_persona_guia = $dato['telefono_persona'];
  $foto_persona = $dato['foto_persona'];
  $descripcion_guia = $dato['descripcion_guia'];
}

$consulta_turista = mysqli_query(conexion(), "SELECT persona.id_persona FROM persona WHERE persona.correo_persona = '$correo_persona'");
$resultado = mysqli_fetch_array($consulta_turista);

$consultabuscar = mysqli_query(conexion(), "SELECT * FROM persona JOIN turista ON persona.id_persona = turista.id_persona WHERE turista.id_persona=$resultado[0]");

while ($mostrar = mysqli_fetch_array($consultabuscar)) {
  $nombre_persona_turista = $mostrar['nombre_persona'];
  $apellido_persona_turista = $mostrar['apellido_persona'];
  $edad_persona = $mostrar['edad_persona'];
  $genero_persona = $mostrar['genero_persona'];
  $telefono_persona_turista = $mostrar['telefono_persona'];
  $correo_persona_turista = $mostrar['correo_persona'];
  $contrasena_persona = $mostrar['contrasena_persona'];
  $foto_persona = $mostrar['foto_persona'];
  $nacionalidad_turista = $mostrar['nacionalidad_turista'];
  $idioma_turista = $mostrar['idioma_turista'];
  $telefono_emergencia_turista = $mostrar['telefono_emergencia_turista'];
  $numero_identidad_turista = $mostrar['numero_identidad_turista'];
  $id_turista = $mostrar['id_turista'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="">
  <title>
    Actividad
  </title>
  <link rel="icon" type="image/x-icon" href="../img/colombia.png">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="../Bootstrap/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../Bootstrap/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../Bootstrap/css/nucleo-svg.css" rel="stylesheet" />
  <link id="pagestyle" href="../Bootstrap/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="g-sidenav-show  bg-gray-100">
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="./homeUser.php">
              <img src="../img/colombia.png" class="navbar-brand-img h-100" alt="Logotipo Colombia Travel">
              <span class="ms-1 font-weight-bold">Colombia Travel</span>
            </a>
          </div>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Buscar">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a class="btn btn-outline-primary btn-sm mb-0 me-3" href="">Buscar</a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none"> Sesión turista</span>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="./profileTourist.php">
                    <div class="d-flex py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Mi cuenta</span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </li>
                <hr class="horizontal dark my-1">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="../Login/loginUser.html">
                    <div class="d-flex py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Cerrar sesión</span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="./touristData.php" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container  py-2 px-3">
      <div id="custom-cards">
        <h2 class="pb-2 border-bottom">
          <?php echo $nombre_actividad; ?>
        </h2>
        <h6>
          📍
          <?php echo $ubicacion_actividad; ?>
        </h6>

        <!-- Modal gallery -->
        <section class="py-4">
          <!-- Section: Images -->
          <section class="">
            <div class="row">
              <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                  <img src="data:image;base64,<?php echo base64_encode($foto01_actividad);  ?>" class="img-fluid shadow border-radius-xl" />
                </div>
              </div>

              <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                  <img src="data:image;base64,<?php echo base64_encode($foto02_actividad);  ?>" class="img-fluid shadow border-radius-xl" />
                </div>
              </div>

              <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                  <img src="data:image;base64,<?php echo base64_encode($foto03_actividad);  ?>" class="img-fluid shadow border-radius-xl" />
                </div>
              </div>
            </div>
          </section>
        </section>

        <div class="row g-5">
          <div class="col-md-8">
            <div>
              <h2 class="pb-2 border-bottom py-3">Descripción de la Actividad Turística</h2>
              <p>
                <?php echo $resena_actividad; ?>
              </p>
            </div>

            <div>
              <h5 class="pb-2 border-bottom py-3">Ubicación</h5>
              <p>
                <?php echo $detalle_ubicacion_actividad; ?>
              </p>
            </div>

            <div>
              <h5 class="pb-2 border-bottom py-3">Tiempo</h5>
              <p>
                <?php echo $tiempo_actividad; ?>
              </p>
            </div>

            <div>
              <h5 class="pb-2 border-bottom py-3">Idiomas</h5>
              <p>
                <?php echo $idioma_actividad; ?>
              </p>
            </div>

            <div>
              <h5 class="pb-2 border-bottom py-3">Qué Incluye</h5>
              <p>
                <?php echo $que_incluye_actividad; ?>
              </p>
            </div>

            <div>
              <h5 class="pb-2 border-bottom py-3">Fecha</h5>
              <p>
                <?php echo $fecha_actividad; ?>
              </p>
            </div>

            <div>
              <h5 class="pb-2 border-bottom py-3">Requisitos</h5>
              <p>
                <?php echo $requisito_actividad; ?>
              </p>
            </div>

            <div>
              <h5 class="pb-2 border-bottom py-3">Recomendaciones</h5>
              <p>
                <?php echo $recomendacion_actividad; ?>
              </p>
            </div>

            <div>
              <h5 class="pb-2 border-bottom py-3">Políticas</h5>
              <p>
                <?php echo $politica_actividad; ?>
              </p>
            </div>


            <div class="pb-2 border-bottom py-5">

              <div class="avatar avatar-xl position-relative">
                <img src="data:image;base64,<?php echo base64_encode($foto_persona);  ?>" alt="img" class="w-100 border-radius-lg shadow-sm">
              </div>

              <h5 class="fw-normal">
                <?php echo $nombre_persona_guia; ?>
                <?php echo $apellido_persona_guia; ?>
              </h5>
              <p>
                <?php echo $descripcion_guia; ?>
              </p>
            </div>

          </div>


          <div class="col-md-4">
            <div class="position-sticky  py-3" style="top: 2rem;">

              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-dark">Únete a este reto</span>
                <span class="badge bg-gradient-primary rounded-pill">★</span>
              </h4>
              <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between bg-light">
                  <div class="text-primary ">
                    <h6 class="my-0">
                      <?php echo $nombre_actividad; ?>
                    </h6>
                    <small>
                      Nombre tour
                    </small>
                  </div>
                  <span class="text-primary">
                    $
                    <?php echo $precio_actividad; ?>
                  </span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                  <span>Total</span>
                  <strong>$
                    <?php echo $precio_actividad; ?>
                  </strong>
                </li>
                <div class="pt-1 mb-4 d-grid">
                  <a class="btn bg-gradient-primary btn-block" type="submit" data-bs-toggle="modal" data-bs-target="#payments">Elegir</a>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>,
                Desarrollado por
                <a href="" class="font-weight-bold" target="_blank">Santiago Reyes.</a>
                Todos los derechos reservados
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="" class="nav-link text-muted" target="_blank">Información</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link text-muted" target="_blank">Información</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link text-muted" target="_blank">Información</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link pe-0 text-muted" target="_blank">Información</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </footer>

    <script src="../Bootstrap/js/popper.min.js"></script>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="../Bootstrap/js/perfect-scrollbar.min.js"></script>
    <script src="../Bootstrap/js/smooth-scrollbar.min.js"></script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="../Bootstrap/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
  </main>
</body>

</html>


<!-- Modal -->
<div class="modal fade" id="payments" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-0 border-bottom-0 py-0">
        <!-- <h1 class="fw-bold mb-0 fs-2 p-5">Formulario de pago</h1> -->
        <h3 class="mb-0 fs-0 p-5">Formulario de pago</h3>
        <button type="button" class="btn-close btn-primary" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5 pt-0">
        <form class="needs-validation" method="post">
          <h4 class="mb-3">Datos personales</h4>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nombres</label>
              <input type="text" class="form-control" id="nombre_turista_pago" name="nombre_turista_pago" placeholder="" value="<?php echo $nombre_persona_turista; ?>" required>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Apellidos</label>
              <input type="text" class="form-control" id="apellido_turista_pago" name="apellido_turista_pago" placeholder="" value="<?php echo $apellido_persona_turista; ?>" required>
            </div>

            <div class="col-sm-6">
              <label for="pais" class="form-label">Nacionalidad</label>
              <input type="text" class="form-control" id="nacionalidad_turista_pago" name="nacionalidad_turista_pago" placeholder="" value="<?php echo $nacionalidad_turista; ?>" required>
            </div>

            <div class="col-sm-6">
              <label for="ciudad" class="form-label">Idetificación</label>
              <input type="number" class="form-control" id="identificacion_turista_pago" name="identificacion_turista_pago" placeholder="" value="<?php echo $numero_identidad_turista; ?>" required>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Correo electrónico</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="correo_turista_pago" name="correo_turista_pago" placeholder="" value="<?php echo $correo_persona_turista; ?>" required>
              </div>
            </div>
          </div>
          <hr class="my-3">

          <h4 class="mb-3">Detalles de la actividad</h4>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Actividad turistica</label>
              <input type="text" class="form-control" id="nombre_actividad_pago" name="nombre_actividad_pago" placeholder="" value="<?php echo $nombre_actividad; ?>">
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Ubicación</label>
              <input type="text" class="form-control" id="ubicacion_actividad_pago" name="ubicacion_actividad_pago" placeholder="" value="<?php echo $ubicacion_actividad; ?>">
            </div>

            <div class="col-md-6">
              <label for="dateexp" class="form-label">Fecha</label>
              <input type="date" class="form-control" id="fecha_actividad_pago" name="fecha_actividad_pago" placeholder="" value="<?php echo $fecha_actividad; ?>">
            </div>

            <div class="col-md-6">
              <label for="cvv" class="form-label">Guía turistico</label>
              <input type="text" class="form-control" id="guia_pago" name="guia_pago" placeholder="" value="<?php echo $nombre_persona_guia;
                                                                                                            echo " ";
                                                                                                            echo $apellido_persona_guia ?>">
            </div>

            <div class="col-md-6">
              <label for="dateexp" class="form-label">Email guía</label>
              <input type="email" class="form-control" id="email_guia_pago" name="email_guia_pago" placeholder="" value="<?php echo $correo_persona_guia; ?>">
            </div>

            <div class="col-md-6">
              <label for="cvv" class="form-label">Teléfono guía</label>
              <input type="number" class="form-control" id="telefono_guia_pago" name="telefono_guia_pago" placeholder="" value="<?php echo $telefono_persona_guia; ?>">
            </div>
          </div>

          <div class="col-12">
            <label for="username" class="form-label">Precio total</label>
            <div class="input-group has-validation">
              <input type="text" class="form-control" id="precio_actividad_pago" name="precio_actividad_pago" placeholder="" value="<?php echo "$ ";
                                                                                                                                    echo $precio_actividad; ?>">
            </div>
          </div>

          <hr class="my-3">
          <h4 class="mb-3">Métodos de pago</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="check_pago" name="check_pago" type="radio" class="form-check-input" value="1" checked required>
              <label class="form-check-label" for="credit">Tarjeta Crédito</label>
            </div>
            <div class="form-check">
              <input id="check_pago" name="check_pago" type="radio" class="form-check-input" value="2" required>
              <label class="form-check-label" for="debit">Pago PSE</label>
            </div>
          </div>

          <hr class="my-2">
          <button class="w-100 btn bg-gradient-primary btn-lg" type="submit">Confirmar</button>
        </form>
      </div>
    </div>
  </div>
</div>



<?php

if (!empty($_POST)) {
  if (empty($_POST['nombre_turista_pago']) || empty($_POST['apellido_turista_pago']) || empty($_POST['nacionalidad_turista_pago']) || empty($_POST['identificacion_turista_pago']) || empty($_POST['correo_turista_pago']) || empty($_POST['nombre_actividad_pago']) || empty($_POST['ubicacion_actividad_pago']) || empty($_POST['fecha_actividad_pago']) || empty($_POST['guia_pago']) || empty($_POST['email_guia_pago']) || empty($_POST['telefono_guia_pago']) || empty($_POST['precio_actividad_pago'])) {
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

    $check_pago = $_POST['check_pago'];
    $fecha_pago = date("d-m-Y h:i:s");

    $query_insert_pay = mysqli_query(conexion(), "INSERT INTO pago (fecha_pago, id_turista, id_actividad, id_metodo_pago) 
                        VALUES ('$fecha_pago','$id_turista','$id_actividad_pago','$check_pago')");

    if ($query_insert_pay) {
    ?>
      <script>
        Swal.fire({
          icon: 'success',
          title: 'Reservción exitosa!',
          text: 'Pronto nos comunicaremos contigo',
        }).then(function() {
          window.location = "./homeUser.php";
        });
      </script>
    <?php
    } else {
    ?>
      <script>
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'No fué posible realizar la reserva',
        }).then(function() {
          window.location = "./homeUser.php";
        });
      </script>
<?php
    }
  }
}
?>