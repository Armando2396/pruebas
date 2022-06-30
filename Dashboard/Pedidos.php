<!DOCTYPE html>
<?php
include '../DAO/MetodosAdmin.php';
session_start();
if ($_SESSION['accesoAdmin']<>true) {
    header("Location: Login.php");
}
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Css-Admin/style.css">
    <title>Luty Lui Admin</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="">
                    <i class="fas fa-star"></i>
                        <div class="title">Luty Lui</div>
                    </a>
                </li>
                <li>
                    <a href="Productos.php">
                        <i class="fas fa-boxes"></i>
                        <div class="title">Productos</div>
                    </a>
                </li>
                <li>
                    <a href="clientes.php">
                        <i class="fas fa-users"></i>
                        <div class="title">Clientes</div>
                    </a>
                </li>
                <li>
                    <a href="Pedidos.php">
                        <i class="fas fa-shopping-bag"></i>
                        <div class="title">Pedidos</div>
                    </a>
                </li>
                <li>
                    <a href="Cerrar.php">
                    <i class="fas fa-sign-out-alt"></i>
                        <div class="title">Salir</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="top-bar">
                <div class="search">
                    <input type="text" name="search" placeholder="Buscar">
                    <label for="search"><i class="fas fa-search"></i></label>
                </div>
                <i class="fas fa-bell"></i>
                <div class="user">
                    <img src="imagenes/user.png" alt="">
                </div>
            </div>
            <div class="tables-clientes">
                <div class="last-appointments">
                    <div class="heading">
                        <h2>Listado de Pedidos</h2>
                    </div>
                    <table class="appointments">
                        <thead>
                            <td>Numero</td><td>Cod cliente</td><td>Nombre</td><td>Fecha</td>
                        </thead>
                    <?php
                        $metodos = new MetodosAdmin();
                        $lista= $metodos->ListarPedidos();
                        if (is_array($lista) || is_object($lista)){
                        foreach ($lista as $row) {
                    ?>
                        <tbody>
                            <tr>
                                <td><a href="detallePedido.php?num=<?php echo $row[0]; ?>" class="btn"><?php echo $row[0]; ?></a></td>
                                <td><?php echo $row[1]; ?></td>
                                <td><?php echo $row[2]; ?></td>
                                <td><?php echo $row[3]; ?></td>
                            </tr>
                    <?php     
                            }
                        }
                    ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>