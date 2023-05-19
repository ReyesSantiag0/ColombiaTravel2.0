<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actividades</title>
  <link rel="stylesheet" href="../Desing/style.css">
  <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
  <link rel="icon" type="image/x-icon" href="../img/colombia.png">
</head>

<body>

  <header>
    <?php
    require_once("../header/headerUser.php");
    ?>
  </header>

  <div class="container  py-2 px-3">
    <div id="custom-cards">
      <h2 class="pb-2 border-bottom">Nombre actividad turística</h2>

      <h6>★ (Puntuación) Nombre de la ciudad</h6>

      <!-- Modal gallery -->
      <section class="py-4">
        <!-- Section: Images -->
        <section class="">
          <div class="row">
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
              <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                <img src="../img/bg.JPG" class="w-100" />
                <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </a>
              </div>
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                <img src="../img/bg02.JPG" class="w-100" />
                <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </a>
              </div>
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                <img src="../img/bg03.jpg" class="w-100" />
                <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </a>
              </div>
            </div>

          </div>
        </section>
        <!-- Section: Images -->

        <!-- Section: Modals -->
        <section class="">
          <!-- Modal 1 -->
          <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="ratio ratio-16x9">
                  <iframe src="../../../assets/bg.JPG" title="YouTube video" allowfullscreen></iframe>
                </div>

                <div class="text-center py-3">
                  <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                    Close
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal 2 -->
          <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="ratio ratio-16x9">
                  <iframe src="../../../assets/bg02.JPG" title="YouTube video" allowfullscreen></iframe>
                </div>

                <div class="text-center py-3">
                  <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                    Close
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal 3 -->
          <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="ratio ratio-16x9">
                  <iframe src="../../../assets/bg03.jpg" title="YouTube video" allowfullscreen></iframe>
                </div>

                <div class="text-center py-3">
                  <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                    Close
                  </button>
                </div>
              </div>
            </div>
          </div>

        </section>
        <!-- Section: Modals -->
      </section>
      <!-- Modal gallery -->

      <div class="row g-5">
        <div class="col-md-8">
          <div>
            <h2 class="pb-2 border-bottom py-3">Descripción de la Actividad Turística</h2>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem rem vel reprehenderit dolor deserunt
              voluptate, ullam corporis optio fugiat. Perspiciatis amet ut iste facilis, expedita provident voluptates
              consectetur beatae nihil?</p>
          </div>

          <div>
            <h5 class="pb-2 border-bottom py-3">Qué harás</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi cupiditate aspernatur corrupti
              voluptatum tempore, eius ipsa omnis, laudantium at similique quae non dolorem. In provident quisquam
              nisi
              error, eos cum.</p>
          </div>

          <div>
            <h5 class="pb-2 border-bottom py-3">Qué Incluye</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet dolorum maiores veritatis consectetur
              incidunt? Molestiae atque commodi beatae cupiditate, quis alias. Porro obcaecati doloremque officiis
              adipisci laudantium quo quibusdam deleniti.</p>
          </div>

          <div>
            <h5 class="pb-2 border-bottom py-3">Recomendaciones</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet dolorum maiores veritatis consectetur
              incidunt? Molestiae atque commodi beatae cupiditate, quis alias. Porro obcaecati doloremque officiis
              adipisci laudantium quo quibusdam deleniti.</p>
          </div>


          <div class="pb-2 border-bottom py-5">
            <svg class="bd-placeholder-img rounded-circle" width="50" height="50" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
            </svg>
            <h5 class="fw-normal">Nombre Guía Turísitico</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore magnam nihil ipsum iure mollitia est
              consequatur velit sunt praesentium expedita ea quidem tenetur, harum necessitatibus cum vel voluptates
              eaque nostrum.
            </p>
            <p><a class="btn btn-dark" href="#">Conoce más</a></p>
          </div><!-- /.col-lg-4 -->


        </div>


        <div class="col-md-4">
          <div class="position-sticky  py-3" style="top: 2rem;">

            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-dark">Únete a este reto</span>
              <span class="badge bg-dark rounded-pill">★</span>
            </h4>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Información Actividad Turística</h6>
                  <small class="text-muted">Descripción</small>
                </div>
                <span class="text-muted">$</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Información Actividad Turística</h6>
                  <small class="text-muted">Descripción</small>
                </div>
                <span class="text-muted">$</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Información Actividad Turística</h6>
                  <small class="text-muted">Descripción</small>
                </div>
                <span class="text-muted">$</span>
              </li>
              <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success">
                  <h6 class="my-0">Información Actividad Turística</h6>
                  <small>Descripción</small>
                </div>
                <span class="text-success">$</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total</span>
                <strong>$</strong>
              </li>

              <div class="pt-1 mb-4 d-grid">
                <a class="btn btn-dark btn-block" type="submit" href="./paymentsUser.php">Elegir</a>
              </div>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>

  <footer>
    <?php
    require_once("../footer/footer.php");
    ?>
  </footer>
  <script type="text/javascript" src="../Bootstrap/js/bootstrap.min.js"></script>
</body>

</html>