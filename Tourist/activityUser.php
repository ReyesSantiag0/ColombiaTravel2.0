<?php
include "../bdColombiaTravel/conexion.php";
session_start();
$id_actividad = $_GET['id_actividad'];


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


  $nombre_persona = $dato['nombre_persona'];
  $apellido_persona = $dato['apellido_persona'];
  $foto_persona = $dato['foto_persona'];

  $descripcion_guia = $dato['descripcion_guia'];
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
          📍<?php echo $ubicacion_actividad; ?>
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
                <?php echo $nombre_persona; ?>
                <?php echo $apellido_persona; ?>
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
                    $ <?php echo $precio_actividad; ?>
                  </span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                  <span>Total</span>
                  <strong>$ <?php echo $precio_actividad; ?>
                  </strong>
                </li>
                <div class="pt-1 mb-4 d-grid">
                  <a class="btn bg-gradient-primary btn-block" type="submit" href="./paymentsUser.php">Elegir</a>
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