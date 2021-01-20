<?php
include("BaseDeDatos.php");//se manda llamar la base de datos

//Se crea una clase para tomar los datos de la clase identifix
$identifix = $_GET['identifix'];
//Se crea una clase eliminar la cual tiene la funcion de borrar el dato seleccionado
//EL cual reciba del ID seleccionado
$Eliminar = "DELETE FROM datosdeusuario WHERE id='$identifix'";

//Se utiliza la clase Respuesta que usa mysqli_query que conecta al servidor
$Respuesta= mysqli_query($Conexion, $Eliminar);
//Se crea una sentencia que tiene la funcion redirigir a la pagina anterior
if ($Eliminar) {
  echo "";
  header("Location: Modificar.php");
}



 ?>
