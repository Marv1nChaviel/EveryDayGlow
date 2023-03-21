<?php

 session_start(); 

 if(isset($_SESSION['nombre'])){

   if($_SESSION['nivel'] == "cliente"){
     header("Location: cliente.php");
   } else if($_SESSION['nivel'] == "entrenador"){
     header("Location: entrenador.php");
   }
}else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style-login.css">
    <link rel="icon" href="./img/icon.png">
    <link rel="shortcut icon" href="images/logo-login.png" type="image/x-icon">

    <title>EveryDay Glow</title>
</head>
<body>

    <!-- container de registro -->
  <div class="container" id="container">
    <div class="form-container sign-up-container">
      <form action="registro_usuario.php" method="POST">

        <!--<img class="logo-2" src="/images/logo-login.png" alt="">-->

        <h1>Crear Cuenta</h1>
        <span>Utilice su correo para registrarse</span>
        <input type="text" placeholder="Nombre" name="nombre" required minlength="2" maxlength="30"/>
        <input type="text" placeholder="Apellido" name="apellido"minlength="3" maxlength="30"/>
        <input type="email" id="signUpEmail"placeholder="Correo" name="correo" required minlength="17" maxlength="30"/>
        <input type="password" placeholder="Contraseña" name="contra" required minlength="8" maxlength="30"/>
        <div class="form-floating-pers">
          <label for="exampleFormControlInput1" class="label-pers">Fecha de nacimiento</label>
          <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Date" name="fecha_nacimiento" style="margin: 0;" min="1950-01-01" max="2006-01-01">
          
        </div>
        
        <div class="container-select">
          <div class="select-bar">
            <select class="select" name="nivel">
            <option selected disabled>Nivel...</option>
              <option value="1">Entrenador</option>
              <option value="2">Alumno</option>
            </select>
          </div>
          <button type="submit" style="margin-top:15px;">Registrarse</button>
        </div>
 
        
      </form>
    </div>
    <!-- container de inicio -->
    <div class="form-container sign-in-container">
      <form action="Verificacion_Datos.php" method="POST">
        <img class="logo" src="./images/logo-login.png" alt="">
        <h1>Mi Cuenta</h1>
        <span>Ingresa tu Cuenta</span>
        <input type="email" id="signInEmail" placeholder="Correo" name="correo" required/>
        <input type="password" placeholder="Contraseña" name="contraseña" required/>
        <button type="submit">Iniciar Sesión</button>
      </form>
    </div>
         <!-- Comentarios del Login -->
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>¿Ya te registraste?</h1>
          <p> ¡Entonces que esperas, haz click aquí!</p>
          <button class="ghost" id="signIn" onClick="openSignIn()">Iniciar Sesion</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Bienvenido a EveryDay Glow</h1>
          <p>Ingresa aquí tus datos personales si no posees una cuenta</p>
          <button class="ghost" id="signUp" onClick="openSignUp()">Registrarse</button>
        </div>
      </div>
    </div>
  </div>
  
    <script src="./js/scripts-login.js"></script>
    <script src="./js/select-scripts.js"></script>

</body>
</html>
<?php 
    
}

?>