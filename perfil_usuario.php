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
  <link rel="stylesheet" href="./styles/style3.css">
  <link rel="stylesheet" href="./styles/media_query.css">
  <title>NBO: Negocios Brillantes y Originales</title>
</head>

<body class="body1">

<?php
  session_start();
  if(!isset($_SESSION["usuario"]))
  {
    header("Location:./login_usuario.php");
    exit;
  }
?>

  <div class="vista_previa">
    <div>
      <input type="hidden"><img class="perfil" src="./resources/poly-cat.jpg"/></input>
    </div>
    <div class="nombre">
      <h3>Nombre de Usuario</h3>
    </div>

    <div class="boton1">
      <button type="reset">Cambiar foto de Perfil</button>
    </div>
    <div class="boton2">
      <button type="submit">Borrar foto de perfil</button>
    </div>
  </div>
  
  <div class="content">
    <div class="DatosV1">
      <div class="info1">
        <h2>Datos personales</h2>
        <form>
          <form>
            <label for="nombre-usuario">Editar nombre</label>
            <input type="text" id="nombre-usuario-input" placeholder="Ingrese su nombre">

            <div class="boton_actualizar">
              <button type="submit">Actualizar nombre</button>
            </div>
            
          </form>
        </form>
      </div>
      
      <div class="mail_usuarios">
        <form>
          <label for="email">Editar Email:</label>
          <input type="email" id="email" placeholder="Ingrese el Email.">
        </form>
      </div>
      
      <div class="contra_usuarios">
      <form>
          <label for="password">Editar Contraseña:</label>
          <input type="password" id="contraseña" placeholder="********">
          <input type="checkbox" id="mostrar_contraseña">
          <label for="mostrar_contraseña">Mostrar contraseña</label>
        </form>
      </div>
      
      <div class="genero">
        <form>
          <label for="genero">Género:</label><br>
          <input type="radio" name="genero" value="Masculino">Masculino
          <input type="radio" name="genero" value="Femenino">Femenino
          <input type="radio" name="genero" value="Prefiero no decirlo">Prefiero no decirlo
          <input type="radio" name="genero" value="Otro">Otro
        </form>
      </div>
  </div>
</body>

<body class="body2">
  <div class="DatosV2">
    <h2>Datos negocio</h2>


    <div class="info_negocios">
      <form>
        <label for="nombre_negocio">Editar nombre del negocio</label>
        <input type="text" id="nombre_negocio" placeholder="Ingrese el nombre del negocio">
      </form>
    </div>

    <div class="num_negocio">
      <form>
        <label for="num_negocio">Editar número de teléfono</label>
        <br>
        <input type="" id="num_negocio" placeholder="Ingrese su número"  maxlength="8">
      </form>
    </div>

    <div class="info2">
      <form>
        <label for="descripcion">Agrega una pequeña descripción sobre tu negocio y/o servicio</label><br>
        <textarea id="descripcion" maxlength="282" placeholder="Máximo 280 caracteres"></textarea>
      </form>
    </div>
    
    
      </form>
    </div>
  </div>
</div>

  <script src="./scripts/scritp3.js"></script>
</body>
</html>