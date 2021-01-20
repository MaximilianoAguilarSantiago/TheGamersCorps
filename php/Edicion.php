<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
  <link rel="stylesheet" href="cssphp/Estilo.css"><!--mandan llamar los estilos-->
    <title></title>
  </head>
  <body class="FondoXD"><!--manda llamar la classe fondo-->
<table class="Tabla"><!--en la tabla se manda llamar la clase TABLA-->
  <caption>
    <h1>EDICION DE DATOS</h1><!--texto con el mayor tamaño de fuente-->
  </caption>
<tr><!--define una fila de celdas en una tabla. Estas pueden ser una mezcla de elementos--->
  <th>ID</th>
  <th>Nombre</th>
  <th>Apellidos</th>
  <th>Correo</th>
  <th>Password</th>
  <th>Pass Confirmado</th>
  <th>Comentarios</th>
</tr>

<?php
include("BaseDeDatos.php");//se manda llamar la base de datos
$identifix = $_GET['identifix'];
$Visualizar="SELECT * FROM datosdeusuario WHERE id = '$identifix'";
$Respuesta= mysqli_query($Conexion, $Visualizar);//se pide una respuesta de las conexiones
while($Mostrar=mysqli_fetch_array($Respuesta)){
 ?>
 <section>
   <form class="" action="ProcesoEditar.php" method="post"><!--se habilita el proceso para editar los datos-->
     <tr>
       <td> <input class="Textos" type="text" name="id" value="<?php  echo $Mostrar{'id'}?> " hidden><?php  echo $Mostrar{'id'}?></td>
       <td> <input class="Textos" type="text" name="nombre" value="<?php  echo $Mostrar{'nombre'}?>"></td>
       <td> <input class="Textos" type="text" name="apellidos" value="<?php  echo $Mostrar{'apellidos'}?>"></td>
       <td> <input class="Textos" type="text" name="correo" value="<?php  echo $Mostrar{'correo'}?>"></td>
       <td> <input class="Textos" type="text" name="pass" value="<?php  echo $Mostrar{'pass'}?>"></td>
       <td> <input class="Textos" type="text" name="repass" value="<?php  echo $Mostrar{'repass'}?>"></td>
       <td> <input class="Textos" type="text" name="comentarios" value="<?php  echo $Mostrar{'comentarios'}?>"></td>
     </tr>

     <?php
     }
      ?>
    </table>
       <button class="BtnActualizar" type="submit" name="ActualizarData">Actualizar Datos</button><!--botom de actualizar-->
   </form>
      <button class="BtnRegresar" type="button " onclick="history.go(-1);">Regresar</button><!--boton de regresar-->
 </section>



  </body>
</html>
