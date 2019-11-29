<?php
include("../database/database.php")

if(!$conexion){
  die("No hay conexion:" . mysqli_connect_error());
}
  include("../database/database.php");
  $sql = "INSERT INTO producto(nombre, descripcion, precio) Values('$nombre', '$descripcion', '$precio')";
if(mysquli_query($conexionm $sql)){
  echo "Producto agregado correctamente";
}else{
  echo "Error:" . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>
