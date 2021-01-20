<?php
//Incluimos nuestros archivo BaseDeDatos para facilitar la conexion con el servidor
include("BaseDeDatos.php");


//Se crea una validacion al utilizar el boton enviar
if (isset($_POST['EnviarDatos'])) {
  //Se crea una funcion para el Id este lo generara de manera aleatoria
$Identificador = rand(1,99);
//Se crea una clase para lo que se reciba de usuario
$Nombre = $_POST["usuario"];
//Se crea una clase para lo que se reciba de apellido
$Apellido = $_POST["apellido"];
//Se crea una clase para lo que se reciba de correos
$Correo = $_POST["correos"];
//Se crea una clase para lo que se reciba de pass
$Contra1 = $_POST["pass"];
//Se crea una clase para lo que se reciba de repass
$Contra2 = $_POST["repass"];
//Se crea una clase para lo que se reciba de comentarios
$Comentario = $_POST["comentarios"];


//Se crea una clase con la funcion de insertar datos a nuestra tabla en la Base de Datos
$IngresarDatos = "INSERT INTO datosdeusuario VALUES ('$Identificador',
  '$Nombre',
  '$Apellido',
  '$Correo',
  '$Contra1',
  '$Contra2',
  '$Comentario'
)";

//Se procesa la orden con mysqli_query y utilizando la conexion de nuestro archivo incluido
$ProcesarIngresar = mysqli_query($Conexion, $IngresarDatos);

//Se crea una sentencia para los datos procesados
if(!$ProcesarIngresar){
  //Si los datos son erroneos muestra el siguiente mensaje
  echo"Error Al Insertar Datos";
}
//Si los datos son correctos muestra una alerta y redirecciona a la pagina anterior
echo "<script>alert('Datos Actualizados Y Cargados'); window.location='../Registro.html'; </script>";
}
 ?>
