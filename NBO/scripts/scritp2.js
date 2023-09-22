// JavaScript modificable para Oscar

/* Esto de aquí es una función que añade un evento, lo que hace es que si la posición de la página
se mueve (dicho de forma técnica, si la posición Y de la pantalla se mueve) entonces se ejecuta el "if" 
dónde añade una clase, clase que ya tiene sus funciones en CSS creadas. Osea que se van a aplicar solamente 
si la clase existe para empezar. El "else" borra la clase cuando la pantalla está en la posición inicial
de esta forma funciona el efecto de crear una sombra cuando se baja la pantalla */

window.addEventListener("scroll", function() {
  var header = document.querySelector(".header_N2");
  if (window.scrollY > 0) {
    header.classList.add("sombra_header");
  } else {
    header.classList.remove("sombra_header");
  }
});


/* Lo de aquí tiene 2 secciones, se trata de un menú que se despliega cuando le da click al "icono" y el otro 
que lo cierra cuando se clickea fuera */

/* Este primer código lo que hace es añadir un toggle que hace que se mantenga activo el menú aunque baje la 
pantalla, de esta forma nunca se irá el menú sin importar dónde esté */

document.querySelector('.icono_usuario').addEventListener('click', function () {
  const usuario = document.querySelector('.usuario');
  usuario.classList.toggle('active');
});

/* Y este lo que hace es cerrar el menú al dar click fuera del mismo menú incluyendo al ícono */

document.addEventListener('click', function (event) {
  var usuario = document.getElementById('usuario');
  var iconoUsuario = document.querySelector('.icono_usuario');

  // Verifica si el clic ocurrió dentro del menú desplegable
  var verificarClick = usuario.contains(event.target) || iconoUsuario.contains(event.target);

  // Cierra el menú si está abierto y el clic no ocurrió dentro del menú
  if (!verificarClick && usuario.classList.contains('active')) {
    usuario.classList.remove('active');
  }
});




