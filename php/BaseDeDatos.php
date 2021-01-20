<?php

//Servidor localhost
$Servidor="localhost";
//Usuario utilizado
$Usuario="root";
//Contraseña utilizada en este caso ninguna
$Clave="";
//Base de datos utilizada
$BaseDeDatos="registrousuarios";
//Funcion que utiliza mysqli_connect para conectar el php a nuestro servidor usando  las clases creadas anteriormente
$Conexion = mysqli_connect($Servidor, $Usuario, $Clave, $BaseDeDatos);
 ?>
