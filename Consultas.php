<?php
include("php/BaseDeDatos.php");
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="css/EstIndex.css">
    <link rel="stylesheet" href="css/EfectoGaleria.css">
    <link rel="stylesheet" href="css/EstiloMenu.css">
    <link rel="stylesheet" href="css/EstiloAcercaDe.css">
    <title></title>
  </head>
  <body>
    <ul class="BarraMenu mydiv animate-bg">
    <li><h1 class="Enc1 TextCabz1">The Gamers Corp.</h1></li>
    <li><a href="index.html">Inicio</a></li>
    <li><a href="Registro.html">Registro</a></li>
    <li><a href="Tienda.html">Tienda</a></li>
    <li><a href="Noticias.html">Noticias</a></li>
    <li><a href="Consultas.php">Consultas</a></li>
    <li><p class="Eslo">"Tu llevas el mando"</p></li>
    </ul>
<div class="Interno">

    <section class="Cajas Contenidos">
    <h1>Opciones</h1>
    <a class="Modifi" href="php/Modificar.php">Modificar</a> <br> <br> <br>
    <a class="BtnBorrarT"id="BorrarTodo" href="php/ProcesoBorrar.php">Borrar Todos Los Datos</a><br><br><br>
    </section>


    <section id="Mostrar" class="Cajas MisRegistrios">
      <br>
    <caption class="TituloTabla"> <b>REGISTRO DE USUARIOS</b></caption>
    </section>

</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> <!--Se importa libreria jquery para ajax-->
    <script src="js/AlertaBorrarTodo.js" charset="utf-8"></script>
    <script type="text/javascript">

    window.onload= function Cargar(){
            $("#Mostrar").load('php/DatosCargados.php');
    }

    </script>
  </body>
</html>
