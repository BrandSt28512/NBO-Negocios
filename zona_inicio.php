<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="website icon" type="png" href="./resources/Logo_NBO_Mini.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500;700&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="./styles/style2.css">
  <link rel="stylesheet" href="./styles/media_query.css">
  <title>NBO: Negocios Brillantes y Originales</title>
</head>

<body>
<?php
  session_start();
  if(!isset($_SESSION["usuario"]))
  {
    header("Location:./login_usuario.php");
    exit;
  }
?>

  <header class="header_N2">
    <div class="logo-container2">
    <a href="./index.html"><img src="./resources/Logo_UNI-Ruacs.png" alt="logo UNI" id="logo_UNI"></a>
    <a href="./index.html"><img src="./resources/Logo_NBO.png" alt="logo NBO" id="logo_NBO"></a>
    </div>
    <form class="barra_busquedaP" action="#">
      <input class="barra_busqueda" type="search" placeholder="Buscar...">
    </form>
    
    <div class="usuario" id="usuario">
      <div class="icono_usuario">
        <img src="./resources/Imagen_Usuario_Ejemplo.png" alt="Imagen de perfil del usuario">
      </div>
      <ul class="menu_usuario">
        <li><a href="./perfil_usuario.php">Cuenta</a></li>
        <li><a href="./cierre_sesion.php">Cerrar Sesión</a></li>
      </ul>
    </div>
  </header>

  <nav class="nav">
    <div class="nav-list">
    <li><a href="#">Inicio</a></li>
    <li><a href="#">Contactos</a></li>
    <li><a href="#">¿Quiénes somos?</a></li>
    <li><a href="#">¿Cómo empezar?</a></li>
  </div>
  <hr>
  <p><strong>Aguilar, Castillo,<br> Fernández.</strong></p>
  <p>© Copyright 2023 ‎</p>
  </nav>
  
  <main class="main">

    <table class="tabla_descripcion">
      <tr>
        <td  class="perfil1">
          <!--Modificar el tamaño de la imagen y buscar como hacer para q el hp ponga imagen mierda-->
          <img src="./resources/Imagen_Usuario_Ejemplo.png">
          <p>Fernanda Aguilar castillo camaño</p>
        </td>

        <td class="descripcion">
          <!--Esta descripcion la tiene que ingresar el usuario, si el mae toca q lo redireccione al perfil directamente-->
          <p>¡Hola! Puedes personalizar tu perfil. Agrega una pequeña descripcion sobre ti o tu negocio</p>
        </td>
      </tr>
  
    </table>
  
    <table class="tabla_productos">
      <tr>
        <td class="productos">
          <img src="./resources/poly-cat.jpg">
        </td>

        <td class="productos">
          <img src="./resources/poly-cat.jpg">
        </td>
    
        <td  class="productos">
          <img src="./resources/poly-cat.jpg">
        </td>
    
        <td class="productos">
          <img src="./resources/poly-cat.jpg">
        </td>
      </tr>

      <tr>
        <td class="ver_mas">
          <p>Toca para ver mas</p>
          <a href="#" class="boton_ver-mas">Ver más</a>
        </td>

        <td></td>

        <td class="vistas">
          <i class='bx bx-user'></i>
          <p>Visualizaciones</p>
        </td>
      
        <td class="estrellas">
          <i class='bx bx-star'></i>
          <p>Calificación</p>
        </td>
      </tr>
    </table>

  </main>

<script src="./scripts/scritp2.js"></script>
</body>
</html>

