/* Script que conecta una base de datos a php */
<?php
$con = mysqli_connect("localhost","root","","register");
if (mysqli_connect_errno())
  {
  echo "No se puede conectar con la base de datos: " . mysqli_connect_error();
  }
?>
