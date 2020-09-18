/*Preparado para iniciar*/

let titulo=document.getElementById("titulo");
let reproductor=document.getElementById("audio");
let imagen=document.getElementById("imagen");
let boton1=document.getElementById("pista1");
let boton2=document.getElementById("pista2");

// Se chequea en la consola del navegador en el inspeccionar. 
console.log(titulo);

//Instrucciones para cambiar un texto
titulo.textContent="Coldplay";

// Utilización del evento click


boton1.addEventListener("click",CambiarPista1);
boton2.addEventListener("click",CambiarPista2);

function CambiarPista1(){

    reproductor.src="recursos/audio1.mp3";
}

function CambiarPista2(){

    reproductor.src="recursos/audio2.mp3";
}