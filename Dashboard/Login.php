<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css-Admin/stylelogin.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Iniciar Sesion | Luty Lui</title>
</head>
<body>
    <div class="container">
    <div class="wrapper">
        <div class="title"><span>Inicio de Sesion</span></div>
        <form action="valida.php" method="post">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" name="txtMail" placeholder="Correo" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="txtPas" placeholder="Contraseña" required>
                </div>
                <div class="row button">
                    <input type="submit" value="Iniciar Sesion">
                   
                </div> 
                <div class="row copy">
                        <p>Luty Lui || &copy;2022</p>
                
                <div class="row error">
                        <h4 align="center">
                            <?php
                                if(isset($_REQUEST['error'])){
                                    echo $_REQUEST['error'];
                                }
                            ?>
                        </h4>
                </div>
                </div>
        </form>
    </div>
    </div>
</body>
</html>