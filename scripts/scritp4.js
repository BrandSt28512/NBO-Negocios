window.addEventListener("scroll", function() {
    let header = document.querySelector(".header_N2");
    if (window.scrollY > 0) {
      header.classList.add("sombra_header");
    } else {
      header.classList.remove("sombra_header");
    }
  });

  
document.querySelector('.icono_usuario').addEventListener('click', function () {
    const usuario = document.querySelector('.usuario');
    usuario.classList.toggle('active');
  });

  
document.addEventListener('click', function (event) {
    let usuario = document.getElementById('usuario')
    let iconoUsuario = document.querySelector('.icono_usuario')
  
    // Verifica si el clic ocurrió dentro del menú desplegable
    let verificarClick = usuario.contains(event.target) || iconoUsuario.contains(event.target)
  
    // Cierra el menú si está abierto y el clic no ocurrió dentro del menú
    if (!verificarClick && usuario.classList.contains('active')) {
      usuario.classList.remove('active')
    }
  });s
  
  console.log("j")