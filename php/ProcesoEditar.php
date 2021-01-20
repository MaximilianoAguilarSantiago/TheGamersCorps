<?php
include("BaseDeDatos.php");//se manda llamar la base de datos

//Se crea una clase para lo que se reciba de id
$identifix = $_POST['id'];
//Se crea una clase para lo que se reciba de nombre
$Nombre = $_POST['nombre'];
//Se crea una clase para lo que se reciba de apellidos
$Apellido = $_POST['apellidos'];
//Se crea una clase para lo que se reciba de correo
$Correo = $_POST['correo'];
//Se crea una clase para lo que se reciba de pass
$Contra1 = $_POST['pass'];
//Se crea una clase para lo que se reciba de repass
$Contra2 = $_POST['repass'];
//Se crea una clase para lo que se reciba de comentarios
$Comentario = $_POST['comentarios'];

//Se crea una clase la cual tiene la funcion de actualizar los datos de nuestra base de datos
//Utiliza las clases anteriores con los datos recibidos
$actualizar = "UPDATE datosdeusuario SET nombre='$Nombre', apellidos='$Apellido',
              correo='$Correo', pass='$Contra1', repass='$Contra2', comentarios='$Comentario'
              WHERE id='$identifix'";
//Se utiliza la clase preocesado que usa mysqli_query que conecta al servidor
$Procesado= mysqli_query($Conexion, $actualizar);

//Se crea una sentencia que tiene la funcion de dar un mensaje y redirigir a la pagina anterior
if ($Procesado) {
echo "<script>alert('Datos Actualizados Y Cargados'); window.location='Modificar.php';</script>";
}
 ?>
