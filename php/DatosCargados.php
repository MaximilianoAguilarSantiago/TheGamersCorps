<?php
include("BaseDeDatos.php");//se manda llamar la base de datos
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
  <link rel="stylesheet" href="css/Estilo.css"> <!--se manda llamar el estilo css-->
    <title></title>
  </head>
  <body class="FondoXD"><!--fondo-->
    <br>
<caption class="TituloTabla"> <b>REGISTRO DE USUARIOS</b></caption> <!--muestra el titulo-->
<table class="Tabla"> <!--nombre de la clase-->
<tr><!--tabla con sus respectivos apartados-->
  <th>ID</th>
  <th>Nombre</th>
  <th>Apellidos</th>
  <th>Correo</th>
  <th>Password</th>
  <th>Pass Confirmado</th>
  <th>Comentarios</th>
</tr>

<?php
$Visualizar="SELECT * FROM datosdeusuario";//visualizar los datos de usuario
$Respuesta= mysqli_query($Conexion, $Visualizar);
while($Mostrar=mysqli_fetch_array($Respuesta)){
 ?>
<tr><!--define una fila de celdas en una tabla. Estas pueden ser una mezcla de elementos-->
  <td><?php  echo $Mostrar{'id'}?></td>
  <td><?php  echo $Mostrar{'nombre'}?></td>
  <td><?php  echo $Mostrar{'apellidos'}?></td>
  <td><?php  echo $Mostrar{'correo'}?></td>
  <td><?php  echo $Mostrar{'pass'}?></td>
  <td><?php  echo $Mostrar{'repass'}?></td>
  <td class="Comment"><?php  echo $Mostrar{'comentarios'}?></td>
</tr>
<?php
}
 ?>
</table>
  </body>
</html>
