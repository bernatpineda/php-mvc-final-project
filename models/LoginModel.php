<?php

// $pwdInput = "c123";
// $pwdHashedInDb = password_hash($pwdInput, PASSWORD_DEFAULT);
// echo $pwdHashedInDb. "<br>";

// $pwdVerify = password_verify($pwdInput, $pwdHashedInDb);
// echo $pwdVerify . " incorrect";

  session_start();
   
  // Obtengo los datos cargados en el formulario de login.
  $email = "cmarin@gmail.com";
  $password = "c123";
   
  // Datos para conectar a la base de datos.
  $nombreServidor = "localhost";
  $nombreUsuario = "root";
  $passwordBaseDeDatos = "";
  $nombreBaseDeDatos = "gym";
  
  // Crear conexión con la base de datos.
  $conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);
   
  // Validar la conexión de base de datos.
  if ($conn ->connect_error) {
    die("Connection failed: " . $conn ->connect_error);
  }
   
  // Consulta segura para evitar inyecciones SQL.
  $sql = sprintf("SELECT * FROM members WHERE email='$email' AND password='$password'");
  $resultado = $conn->query($sql);
   
  // Verificando si el usuario existe en la base de datos.
  if($resultado){
    // Guardo en la sesión el email del usuario.
    $_SESSION['email'] = $email;
     print_r ($_SESSION);
    // Redirecciono al usuario a la página principal del sitio.
    header("HTTP/1.1 302 Moved Temporarily"); 
    //header("Location: ini.php"); 
  }else{
    echo 'El email o password es incorrecto, <a href="ini.html">vuelva a intenarlo</a>.<br/>';
  }
 
?>