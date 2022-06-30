<!DOCTYPE html>
<?php 
include '../DAO/MetodosDAO.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/estiloRegistro.css">
    <title>Registro | Luty Lui</title>
</head>
<body>
    <form action="" method="get" class="form-register">
        <h3 class="form__titulo">Crear Cuenta</h3>
        <div class="contenedor-inputs">
            <input type="text" name="txtNom" placeholder="Nombres" class="input-100">
            <input type="text" name="txtApe" placeholder="Apellidos" class="input-100">
            <input type="text" name="txtDir" placeholder="Direccion" class="input-100">
            <input type="email" name="txtCor" placeholder="Correo" class="input-100">
            <input type="password" name="txtPas" placeholder="Contraseña" class="input-100">
            <div class="btn-ere">
            <input type="submit" name="btnEnviar" value="Registrar" class="btn-enviar">
            <a href="Catalogo.php" class="btonRegress">Volver</a>
            </div>

            <p class="form__link">¿Ya tienes una cuenta? <a href="" class="iungre"> Ingresa aqui</a></p>
        </div>   
    </form>
    <?php
    if (isset($_REQUEST['btnEnviar'])) {
        $nom=$_REQUEST['txtNom'];
        $cor=$_REQUEST['txtCor'];
        $pas=$_REQUEST['txtPas'];

        $objCli = new Cliente(0, $nom, $cor,$pas);

        $metodos = new MetodosDAO();
        $i = $metodos->RegistrarCliente($objCli);

        if ($i == 1){
            header("Location: Catalogo.php");
        }else{
            echo"<h4 align= center>No se Registro</h4>";
        }

    }
    ?>
</body>
</html>