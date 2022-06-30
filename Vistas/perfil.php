<!DOCTYPE html>

<?php
session_start();
if(!isset($_SESSION['nombre'])){
    //echo"no existe session";
}else{
     //echo  $_SESSION['nombre'] ; 
}    
    ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/estiloRegistro.css">
    <title>Perfil | Luty Lui</title>
</head>
<body>
    
 <form action="" method="get" class="form-register">
      <h3 class="form__titulo">Perfil de Usuario</h3>
      <div class="contenedor-inputs">
           
      <?php 
      
         include ("mostrar.php"); 
            
        ?>
       <input type="submit" name="btnRegresar" value="Regresar" class="btn-enviar">

        </div>  

      </form>
     
      <?php

    if (isset($_REQUEST['btnRegresar'])) {
            header("Location: Catalogo.php");
    }
    ?>
    
</body>

</html>