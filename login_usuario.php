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
  <link rel="stylesheet" href="./styles/login.css">
  
  <title>NBO: Negocios Brillantes y Originales</title>
</head>

<body>

<?php
if(isset($_POST["LOGIN"]))
{
  try
  {
    mysqli_report(MYSQLI_REPORT_OFF);
    $base = new PDO("mysql:host=localhost; dbname=nbo", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * FROM `user_pass` WHERE `EMAIL`= :login AND `PASSWORD`= :password";

    $resultado=$base->prepare($sql);

    $email=htmlentities(addslashes($_POST["email"]));
    $password=htmlentities(addslashes($_POST["password"]));

    $resultado->bindValue(":login", $email);
    $resultado->bindValue(":password", $password);
    $resultado->execute();

    $numero_registro=$resultado->rowCount();

    if($numero_registro!=0)
    {
      session_start();
      $_SESSION["usuario"]=$_POST["email"];

      header("location:./zona_inicio.php");
    }
    else
    {
      header("location:./login_usuario.php");
    }
  }
  catch(Exception $ex)
  {
    die("Error: " . $ex->getMessage());
  }
}
?>

<div class="container">
  <div class="login">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method = "post">
      <div class="container">
        <h1>Iniciar Sesión <br> en NBO</h1>
        <input type="email" placeholder="Email" id="email" name="email">
        <input type="password" placeholder="Contraseña" id="password" name="password"><br>
        <input type="checkbox"><span>Recuerdame</span>
        <a href="#">¿Olvidaste la contraseña?</a>
        <button type="submit" name="LOGIN" id="LOGIN">Iniciar Sesión</button>
        <br>
        <br>
        <br>
        <span class="copyright">© Copyright 2023</span>  
      </div>
    </form>
  </div>
    <div class="register">
      <div class="container">
        <i class="fas fa-user-plus fa-5x"></i>
        <h2>¿No Tienes una Cuenta Todavía?</h2>
        <p>Crea una cuenta fácil y rápido<br>¡Comienza hoy!</p>
        <a href = "./register_usuario.php">
          <button>Registrarse <i class="fas fa-arrow-circle-right"></i></button>
        </a>
      </div>
    </div>
  </div>
</body>
</html>