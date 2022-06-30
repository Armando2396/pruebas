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
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">000</div>
                        <div class="card-name">???</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-briefcase-medical"></i>
                    </div>
                </div>
           
                <div class="card">
                    <div class="card-content">
                        <div class="number">105</div>
                        <div class="card-name">Nuevos Clientes</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            
                <div class="card">
                    <div class="card-content">
                        <div class="number">8</div>
                        <div class="card-name">Pedidos</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                </div>
            
                <div class="card">
                    <div class="card-content">
                        <div class="number">$1000</div>
                        <div class="card-name">Ganancias</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
            </div>
            <div class="tables">
                <div class="last-appointments">
                    <div class="heading">
                        <h2>Listado de Productos</h2>
                        <a href="Formulario.php?op=1&cod=0" class="btn">Nuevos Productos</a>
                    </div>
                    <table class="appointments">
                        <thead>
                            <td>Codigo</td><td>Descripcion</td><td>Precio</td><td>Stock</td><td>Estado</td><td>Imagen</td><td>Accion</td>
                        </thead>
                        <?php
                        $metodos = new MetodosAdmin();
                        $lista = $metodos ->ListarProductos();
                        foreach ($lista as $row) {
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row[0]; ?></td>
                                <td><?php echo $row[1]; ?></td>
                                <td><?php echo $row[2]; ?></td>
                                <td><?php echo $row[3]; ?></td>
                                <td><?php echo $row[4]; ?></td>
                                <td>
                                    <div class="img-box-small">
                                        <img src="../Imagenes/<?php echo $row[6]; ?>">
                                    </div> 
                                </td>
                                <td>
                                    <i class="fas fa-eye"></i>
                                    <a href="Formulario.php?op=2&cod=<?php echo $row[0]; ?>" >
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="Mantenimiento.php?op=3&cod=<?php echo $row[0]; ?>">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php    
                            }
                            // echo $_GET['txtDes'];
                            //  $descripcions= $_REQUEST['text'];
                            //  echo($descripcions); 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>