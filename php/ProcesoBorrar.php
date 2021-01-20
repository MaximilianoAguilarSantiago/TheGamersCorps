<?php
include("BaseDeDatos.php");//se manda llamar la base de datos

//Se crea una clase la cual tiene como funcion borrar los datos de toda la tabla
$Borrar = "DELETE FROM datosdeusuario";

//Se utiliza la clase respuesta que usa mysqli_query que conecta al servidor
$Respuesta= mysqli_query($Conexion, $Borrar);

//Se crea una sentencia que tiene la funcion de redirigir a la pagina colsultas
if ($Borrar) {
  header("Location: ../Consultas.php");
}
 ?>
