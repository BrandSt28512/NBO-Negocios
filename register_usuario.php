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
  <link rel="stylesheet" href="./styles/register.css">
  
  <title>NBO: Negocios Brillantes y Originales</title>
</head>

<body>

<?php
if (isset($_GET["REGISTER"])) 
{
  try
  {
    mysqli_report(MYSQLI_REPORT_OFF);
    $base = new PDO("mysql:host=localhost; dbname=nbo", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $fullname = htmlentities(addslashes($_GET["fullname"]));
    $username = htmlentities(addslashes($_GET["username"]));
    $email = htmlentities(addslashes($_GET["email"]));
    $password = htmlentities(addslashes($_GET["password"]));
    $phone = htmlentities(addslashes($_GET["phone"]));

    $sql = "INSERT INTO `user_pass`(`FULLNAME`, `USERNAME`, `EMAIL`, `PASSWORD`, `PHONE`) VALUES (:fullname, :username, :email, :password, :phone)";

    $resultado = $base->prepare($sql);
    $resultado->bindParam(':fullname', $fullname);
    $resultado->bindParam(':username', $username);
    $resultado->bindParam(':email', $email);
    $resultado->bindParam(':password', $password);
    $resultado->bindParam(':phone', $phone);

    if ($resultado->execute()) 
    {
      header("Location:./register_usuarioExito.php");
    }
    else
    {
      echo "Error en la consulta. No se pueden dejar campos vacíos";
    }
  }
  catch (Exception $ex)
  {
    die("Error: " . $ex->getMessage());
  }
}
?>

  <div class="container">
    <div class="title">Bienvenido a NBO</div>
    <br>
    <div class="content">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method = "get">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nombre Completo</span>
            <input type="text" id="fullname" name="fullname" placeholder="Ingrese nombre completo" required>
          </div>
          <div class="input-box">
            <span class="details">Nombre de Usuario</span>
            <input type="text" id="username" name="username" placeholder="Ingresar nombre de usuario" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" id="email" name="email" placeholder="Ingresar email" required>
          </div>
          <div class="input-box">
            <span class="details">Número Telefónico</span>
            <input type="text" id="phone" name="phone" placeholder="Ingresar número telefónico" required>
          </div>
          <div class="input-box">
            <span class="details">Contraseña</span>
            <input type="password" id="password" name="password" placeholder="Ingresar contraseña" required>
          </div>
          <div class="input-box">
            <span class="details">Confirmar Contraseña</span>
            <input type="password" name="password" placeholder="Confirmar contraseña" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="REGISTER" id="REGISTER" value="Registrarse">
        </div>
        <span class="copyright">© Copyright 2023</span>
      </form>
    </div>
  </div>

</body>
</html>