/*Preparado para iniciar*/
let imagen=document.getElementById("imagen");
let boton=document.getElementById("boton");

boton.addEventListener("click",cambiarImagen);

function cambiarImagen(){

    imagen.src="recursos/imagen2.jpg";
}

