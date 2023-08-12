<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagos</title>
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

  <div class="container py-2 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100 ">
      <div class="col-md-offset-3 col-md-6">
        <div class="card ">
          <div class="card-body">
            <h4 class="mb-3">Formulario de pago</h4>
            <hr class="my-4">
            <form class="needs-validation">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">Nombres</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                </div>

                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Apellidos</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                </div>

                <div class="col-12">
                  <label for="username" class="form-label">Correo electrónico</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" id="username" placeholder="nombre@gmail.com" required>
                  </div>
                </div>

                <div class="col-12">
                  <label for="address" class="form-label">Dirección de residencia</label>
                  <input type="text" class="form-control" id="address" placeholder="Casa 11b Barrio, Ciudad" required>
                </div>

                <div class="col-sm-6">
                  <label for="pais" class="form-label">País</label>
                  <input type="text" class="form-control" id="pais" placeholder="Colombia" value="" required>
                </div>

                <div class="col-sm-6">
                  <label for="ciudad" class="form-label">Ciudad</label>
                  <input type="text" class="form-control" id="ciudad" placeholder="" value="Pasto - Nariño" required>
                </div>

              </div>
              <hr class="my-4">

              <h4 class="mb-3">Medios de pago</h4>

              <div class="my-3">
                <div class="form-check">
                  <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                  <label class="form-check-label" for="credit">Tarjeta Credito</label>
                </div>
                <div class="form-check">
                  <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                  <label class="form-check-label" for="debit">Tarjeta Debito</label>
                </div>
                <div class="form-check">
                  <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                  <label class="form-check-label" for="paypal">PSE</label>
                </div>
              </div>

              <div class="row gy-3">
                <div class="col-md-6">
                  <label for="cc-name" class="form-label">Nombre de la tarjeta</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required>
                </div>

                <div class="col-md-6">
                  <label for="cc-number" class="form-label">Numero de la tarjeta</label>
                  <input type="text" class="form-control" id="cc-number" placeholder="" required>
                </div>

                <div class="col-md-6">
                  <label for="dateexp" class="form-label">Fecha de expiración</label>
                  <input type="date" class="form-control" id="dateexp" placeholder="" required>
                </div>

                <div class="col-md-6">
                  <label for="cvv" class="form-label">CVV</label>
                  <input type="text" class="form-control" id="cvv" placeholder="" required>
                </div>
              </div>

              <hr class="my-4">

              <button class="w-100 btn btn-dark btn-lg" type="submit">Confirmar y pagar</button>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>




</body>

</html>