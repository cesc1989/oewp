// JavaScript Document
function muestraOculta(id){var elemento = document.getElementById('formu_'+id);
//var boton = document.getElementById('boton');
if(elemento.style.display == "" || elemento.style.display == "none")
{elemento.style.display = "block";}
//boton.innerHTML = 'Mostrar contenidos';}
else {elemento.style.display = "none";
//boton.innerHTML = 'Ocultar contenidos';
}}