<!DOCTYPE html>
<?php
include '../DAO/MetodosDAO.php';
session_start();
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Pago | Luty Lui</title>
</head>
<body>
    <?php
    if(isset($_REQUEST['total'])){
    $total = $_REQUEST['total'];
    }
    $estado=$_REQUEST['estado'];
    if ($estado=='pagar') {
    ?>
    <!---- FORMULARIO PAYPAL -->
          <center> <h4>El monto a pagar es: <?php echo $total; ?></h4>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_ext-enter" />
        <input type="hidden" name="redirect_cmd" value="_xclick" />
        <input type="hidden" name="business" value="armandomartinezbatista2@gmail.com" />
        <input type="hidden" name="item_name" value="Productos varios" />
        <input type="hidden" name="quantity" value="1" />
        <input type="hidden" name="amount" value="0.01" />
        <input type="hidden" name="currency_code" value="USD" />
        <input type="hidden" name="return" value="http://localhost/lutylui/Vistas/Pago1.php?estado=ok" />
        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest" />
        <input type="image" src="http://www.paypal.com/es_XC/i/btn/x-click-but01.gif" border="0" name="submit" alt="Pagar para completar la compra." />
    </form>
        </center>
     <!----- FIN DE PAYPAL -->  
     <?php
     }else if ($estado=='ok'){
        
        $objMet = new MetodosDAO();
        if (isset($_SESSION['cesta'])) {
            /*foreach($_SESSION['cesta'] as $row)
            {
            $io=$row;
            }   
            $codCli=$io;*/
            $codCli=$_SESSION['codCli'];
            $fecha=date("Y-m-d");
            $objPed=new Pedido(0, $codCli, $fecha);
            $objMet->RegistrarPedido($objPed);
            $ultimoPed=$objMet->numeroPed();
            foreach ($_SESSION['cesta'] as $id => $x) {
                $objDetalle = new DetallePedido($ultimoPed[0], $id, $x);
                $objMet->RegistrarDetallePedido($objDetalle); 
            }
            unset($_SESSION['cesta']);
            echo 'Pago se realizo con exito ';
        } 
     }
     ?> 

</body>
</html>