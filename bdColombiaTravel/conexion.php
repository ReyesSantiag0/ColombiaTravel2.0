<?php
function conexion()
{
  $conn = new mysqli("localhost", "root", "", "bdcolombiatravel");

  if ($conn->connect_errno) {
    echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
  }
  return $conn;
}
