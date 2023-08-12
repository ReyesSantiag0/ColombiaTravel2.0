<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eliminar Administrador</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

</body>

</html>


<?php
include "../bdColombiaTravel/conexion.php";

$id_pago = $_GET['id_pago'];


$eliminar_pago = "DELETE pago FROM pago where pago.id_pago = $id_pago";

$resultado = mysqli_query(conexion(), $eliminar_pago);

if ($resultado) {
?>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Exito!!',
      text: 'Reserva eliminada',
    }).then(function() {
      window.location = "./tours.php";
    });
  </script>
<?php
} else {
?>
  <script>
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'No fue posible cancelar la reserva',
    }).then(function() {
      window.location = "./tours.php";
    });
  </script>
<?php
}
?>