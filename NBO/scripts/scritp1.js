// JavaScript modificable para Oscar

/*
Aquí hay un ejemplo más complejo que en el scritp1. Aquí lo que se quiere lograr es crear un nuevo header
el cuál aparecerá cuando se aplique la condición dónde ya no aparece en pantalla, seguido de esto se planea
mostrar una animación de entrada y salida dónde se vea como entra y se va el nuevo header. Al final es solo 
el mismo método de poner una sombra al header (aquí solo aplicado al header nuevo)
*/

var headerOriginal = document.querySelector(".header_N1");
var headerNuevo = document.querySelector(".header_N1_1");

var isHeaderVisible = true; //variable para verificar la "aparicion" del segundo header

function mostrarHeader() {
  if (!isHeaderVisible) {
    headerNuevo.style.top = "0"; // Muestra el nuevo header
    setTimeout(function() {
      headerNuevo.classList.add("sombra_header"); //Muestra la sombra, se tiene que poner un temporizador pq ocurre conflicto con la clase de arriba si se ejecutan al mismo tiempo
    }, 350);
    isHeaderVisible = true;
  }
}

function ocultarHeader() {
  if (isHeaderVisible) {
    headerNuevo.style.top = "-100px"; // Oculta el nuevo header
    headerNuevo.classList.remove("sombra_header"); //No es necesario ponerle un temporizador, no se por qué aquí no ocurre conflicto sip
    isHeaderVisible = false;
  }
}

window.addEventListener("scroll", function() {
  if (window.scrollY > headerOriginal.clientHeight) {
    mostrarHeader();
  } else {
    ocultarHeader();
  }
});