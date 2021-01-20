<?php //proceso para Modificar
include("BaseDeDatos.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <meta charset="utf-8">
  <link rel="stylesheet" href="cssphp/Estilo.css"><!--manda llamar los estilos de css-->
    <title></title>
  </head>
  <body class="FondoXD"> <!--manda llamar a la clase FondoXD-->
<table class="Tabla"><!--manda llamar a la clase Tabla-->
  <caption>
    <h1>MODIFICACION DE DATOS</h1><!--texto con el tamaño mas grande de fuente-->
  </caption>
<tr><!--define una fila de celdas en una tabla. Estas pueden ser una mezcla de elementos-->
  <th>ID</th>
  <th>Nombre</th>
  <th>Apellidos</th>
  <th>Correo</th>
  <th>Password</th>
  <th>Pass Confirmado</th>
  <th>Comentarios</th>
  <th>Opciones</th>
</tr>

<?php
$Visualizar="SELECT * FROM datosdeusuario";//arroja los datos creados en la base de datos de usuario//
$Respuesta= mysqli_query($Conexion, $Visualizar);//arroja una respuesta de mysql
while($Mostrar=mysqli_fetch_array($Respuesta)){
 ?>
<tr><!--define una fila de celdas en una tabla. Estas pueden ser una mezcla de elementos-->
  <td><?php  echo $Mostrar['id']?></td>
  <td><?php  echo $Mostrar['nombre']?></td>
  <td><?php  echo $Mostrar['apellidos']?></td>
  <td><?php  echo $Mostrar['correo']?></td>
  <td><?php  echo $Mostrar['pass']?></td>
  <td><?php  echo $Mostrar['repass']?></td>
  <td class="Comment"><?php  echo $Mostrar['comentarios']?></td>
  <td> <a class="Editar" href="Edicion.php?identifix=<?php  echo $Mostrar['id']?>">Editar</a> |
  <a class="Eliminar" id="ElimDato" href="Eliminar.php?identifix=<?php  echo $Mostrar['id']?>">Eliminar</a></td>

</tr>
<?php
}
 ?>
</table>
<button class="BtnActualizar" type="button" onclick="window.location='../Consultas.php'">Regresar</button><!--bontón para actualizar-->

    <script src="../js/AlertaEliminarDatos.js" charset="utf-8"></script><!--envian un mensaje para confirmar si realmente decea eliminar
      algun dato-->
  </body>
</html>
