<!DOCTYPE html>
<?php

session_start();
include '../DAO/MetodosDAO.php';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/stilo.css">
    <link rel="stylesheet" href="../Css/menuRs.css">
    <link rel="stylesheet" href="../Css/stiloMe.css">
    <link rel="stylesheet" href="../Css/tablacesta.css">
    <link rel="stylesheet" href="../Css/estilobtn.css">
    <link rel="stylesheet" href="../Css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Cesta</title>
    <link href="https://file.myfontastic.com/pjkdydyYP2f7ARAztw8rNC/icons.css" rel="stylesheet"><!--Icono Redes-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"><!--Icono Buscar-->
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script> <!--Icono del menu-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> <!--codigo para usar los iconos de esa Web-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<style>
    .img-pro{
        max-width: 64px;
        max-height: 64px;
    }
</style>
<body>
             <!-----------Inicia Menu-->
      <div class="container__header">	
    <script type="text/javascript" src="js1/busqueda.js"></script>
    <?php include("../Componentes/menu2.php");?>
    </div>
<!-----------Fin Menu-->

<!-----------Inicia MenuR-->
<div class="container__header2">	
    <script type="text/javascript" src="js1/busqueda.js"></script>
    <?php include("../Componentes/menuR.php");?>
    </div>
<!-----------Fin MenuR-->
<!--
<div class="container__banner"> 

                 <img src="../Banners/banner1.jpg" alt="" class="bannI">

        </div>Termina banner-->
<br>

<div class="tableC">
    <div class="TableC-Contenedor">
        <div class="table-title">
            <h3 align="center">Carrito de Compras</h3>
        </div>   
        <table border="1" align="center" width="400" class="table-fill">
            <thead>
                <tr>
                    <th class="table-left">Productos</th>
                    <th class="table-left">Cantidad</th>
                    <th class="table-left">Precio</th>
                    <th class="table-left">Subtotal</th>
                </tr>
            </thead>
            <tbody class="table-hover">
                <?php
                    if (isset($_SESSION['cesta'])){
                    $total=0;
                    foreach($_SESSION['cesta'] as $id=>$x){
                        $objMetodos=new MetodosDAO();
                        $lista=$objMetodos->ListarProductosCod($id);
                        foreach($lista as $row){
                                $nombre=$row[1];
                                $precio=$row[2];
                        }
                        $costo=$x*$precio;
                        $total=$total+$costo;
                        $Subtotal = number_format($total, 2);
                        $imp=$Subtotal*0.07;
                       
                ?>
                    <tr>
                        <td class="text-left" data-label="Nombre"><img src="../Imagenes/<?php echo $row[6]; ?>" class="img-pro"><?php echo $nombre; ?></td>
                        <td class="text-left" data-label="Cantidad"><?php echo $x; ?>
                            <a href="" class="icon-mas"></a>
                            <a href="../DAO/TiendaDAO.php?id=<?php echo $id;?>&accion=eliminar&op=2" class="icon-menos"></a>
                        </td>
                        <td class="text-left" data-label="Precio"><?php echo "B/. ".$precio; ?></td>
                        <td class="text-left" data-label="Costo"><?php echo "B/. ".$costo; ?></td>
                    </tr>
                <?php
                }
                ?>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="tableD">
        <div class="table-title">
            <h3>Total de Pedido</h3>
        </div>
        <table>
            <thead>

            </thead>
            <tbody class="table-hover">
                <tr>
                    <td>SubTotal:</td>
                    <td>B/. </td>
                    <td><?php echo $Subtotal; ?></td>
                </tr>
                <tr>
                    <td>Impuesto:</td>
                    <td>B/.</td>
                    <td><?php echo $imp; ?></td>
                </tr>
                <tr>
                    <td>Total:</td>
                    <td>
                        <?php
                        $totalaPagar=$Subtotal+$imp;
                        echo 'B/. ';
                        ?>
                    </td>
                    <td><?php echo $totalaPagar; ?></td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
    <div class="enlaB">
        <h6 align="center" >
            <br>
            <div class="botones-cat">
                <a href="Catalogo.php" class="Text-abajo bton1">Seguir Comprando</a>
                <a href="../DAO/TiendaDAO.php?accion=vacio&op=2" class="Text-abajo bton2">Eliminar Compras</a>
                <a href="#" class="Text-abajo bton3" onclick="validar()" data-bs-toggle="modal" data-bs-target="#LoginModal">Realizar Pago</a>
            </div>
        </h6>
    </div>
<br>


  <!-- Footer -->
  <footer class="pie-pagina">
    <?php include("../Componentes/footer2.php");?>
    </footer>

 <!-- Modal login-->
 <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php include("../Componentes/Login.php");?>
    </div>
    <script>
        function validar(){
            <?php 
            if($_SESSION['acceso']==true){    
            ?>
            location.href='Pago1.php?total=<?php echo $totalaPagar; ?>&estado=pagar';
            <?php
            }
            ?>
        }
    </script>


    <script type="text/javascript">
        var resultado=document.getElementById("mostrar");
        function mostrarDetalle(cod){
            //validamos navegador que estamos utilizando
            var xmlhttp;
            if(window.XMLHttpRequest){
                xmlhttp=new XMLHttpRequest();
            }else{
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function(){
                if(xmlhttp.readyState===4 && xmlhttp.status===200){
                 resultado.innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","detalle.php?cod="+cod,true);
            xmlhttp.send();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
 <!--<script src="../js/menuS.js"></script>Para el menu-->
 <script src="../js/menuRes.js"></script><!--Para el menuR-->
    <script src="../js/slideJS.js"></script><!--Para el menu-->

       <!--Script boton buscar, efecto al tocar boton-->
       <script>
        const icon = document.querySelector('.icon');
        const search = document.querySelector('.search');
        icon.onclick = function(){
            search.classList.toggle('active')   
        }
    </script>
</body>
</html>