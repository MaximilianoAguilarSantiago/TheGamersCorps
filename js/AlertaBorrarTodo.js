//Se cra la funcion confirmar
function confirmar(e) {
    //Esta muestra un mensaje
  if (confirm("Todos los datos del registro seran BORRADOS estas Seguro?")){
    //Retorna si se cancela
    return true;
  } else {
    e.preventDefault();
  }
}
//Se crea una variable borrar que recibe del boton borrar todos los datos
let borrar = document.querySelectorAll('#BorrarTodo');

//Se crea una sentencia al dar click mostrara un mensaje
for (var i = 0; i < borrar.length; i++) {
  borrar[i].addEventListener('click', confirmar);
}
