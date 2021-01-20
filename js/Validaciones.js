//Se declaran las variables que utilizara la clase formulario
    var formulario = document.getElementById('formulario'),
		usuario = formulario.usuario,
    apellidos = formulario.apellidos,
    correo = formulario.correo,
    contra = formulario.contra,
    contra2 = formulario.contra2,
    //Se crea una para mostrar los errores
		error = document.getElementById('error');


/*Funcion validarNombre tiene como proposito Verificar si un dato esta vacio
y muestra un mensaje en cosola y en pantalla ademas de generar un bloque de
color rojo en el cual aparecen los datos incorrectos y ademas de contar con
su validacion si es que estan llenos
*/
function validarNombre(e){
    if(usuario.value == '' || usuario == null){
        console.log('Completa el nombre');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un Nombre</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}

/*Funcion validarApellido tiene como proposito Verificar si un dato esta vacio
y muestra un mensaje en cosola y en pantalla ademas de generar un bloque de
color rojo en el cual aparecen los datos incorrectos y ademas de contar con
su validacion si es que estan llenos
*/
function validarApellido(e){
    if(apellidos.value == '' || apellidos == null){
        console.log('Completa el apellido');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un apellido</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}

/*Funcion validarCorreo tiene como proposito Verificar si un dato esta vacio
y muestra un mensaje en cosola y en pantalla ademas de generar un bloque de
color rojo en el cual aparecen los datos incorrectos y ademas de contar con
su validacion si es que estan llenos
*/
function validarCorreo(e){
    if(correo.value == '' || correo == null){
        console.log('Completa el Corro');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un Correo</li>';
        e.preventDefault();

}else{
    error.style.display='none';
}
}

/*Funcion validarContra1 tiene como proposito Verificar si un dato esta vacio
y muestra un mensaje en cosola y en pantalla ademas de generar un bloque de
color rojo en el cual aparecen los datos incorrectos y ademas de contar con
su validacion si es que estan llenos
*/
function validarContra1(e){
    if(contra.value == '' || contra == null){
        console.log('Completa contra1');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un Password</li>';
        e.preventDefault();

}else{
    error.style.display='none';
}
}

/*Funcion validarContra2 tiene como proposito Verificar si un dato esta vacio
y muestra un mensaje en cosola y en pantalla ademas de generar un bloque de
color rojo en el cual aparecen los datos incorrectos y ademas de contar con
su validacion si es que estan llenos
*/
function validarContra2(e){
    if(contra2.value == '' || contra2 == null){
        console.log('Completa contra2');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa En Repetir Password</li>';
        e.preventDefault();

}else{
    error.style.display='none';
}
}

/*Esta funcion realzia la validacion si la contra1 y contra2 sin iguales
las cuales las valida si son correctasm, si es al contrario mandara un mensaje
de que no son iguales
*/
function validarContrasIguales(e) {
  if (contra.value != contra2.value) {
    console.log('Verificar');
    error.style.display = 'block';
    error.innerHTML = error.innerHTML + '<li>Las contraseñas No son Iguales</li>';
    e.preventDefault();
  }

}

//Se agregan todas la funciones a una sola
function validarForm(e){
   error.innerHTML = '';
   error.style.display = 'block';
   validarNombre(e);
   validarApellido(e);
   validarCorreo(e);
   validarContra1(e);
   validarContra2(e);
   validarContrasIguales(e);
}

//Se establece que al momento de precionar el boton con el tipo submit se activara la funcion validarForm
formulario.addEventListener('submit', validarForm);
