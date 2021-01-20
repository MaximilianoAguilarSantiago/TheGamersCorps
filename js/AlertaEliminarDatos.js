//Se cra la funcion confirmar
function confirmar(e) {
  //Esta muestra un mensaje
  if (confirm("Desea eliminar el dato seleccionado?")){
    return true;
      //Retorna si se cancela
  } else {
    e.preventDefault();
  }
}
//Se crea una variable borrar que recibe del boton eliminar
let borrar = document.querySelectorAll('#ElimDato');

//Se crea una sentencia al dar click mostrara un mensaje
for (var i = 0; i < borrar.length; i++) {
  borrar[i].addEventListener('click', confirmar);
}
