<?php
include '../DAO/MetodosAdmin.php';
session_start();
if ($_SESSION['accesoAdmin']<>true) {
    header("Location: Login.php");
}
$num=$_REQUEST['num'];
?>
<table class="table">
    <tr>
        <th>Numero</th><th>Cod Productos</th><th>Descripcion</th><th>Precio</th><th>Cantidad</th>
    </tr>
            <?php
                $metodos = new MetodosAdmin();
                $lista= $metodos->ListarPedidosNum($num);
                if (is_array($lista) || is_object($lista))
                {
                foreach ($lista as $row) {
            ?>
    <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
    </tr>
                <?php     
                }
            }
                ?>
    <tr>            
        <td></td>
        <td></td>
        <td></td>
        <td>Subtotal:</td>
        <td><?php 
            $numero = $row[3]*$row[4];
            $Subtotal = number_format($numero, 2);
            echo 'B/. '. $Subtotal;  
            ?>
        </td>
    </tr>    
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>ITBMS:</td>
        <td><?php 
            $ITMBS = $Subtotal * 0.07;
            $impT= number_format($ITMBS,2);
            echo 'B/.  '. $impT;
            ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>Total:</td>
        <td><?php 
            $Total = $Subtotal + $impT;
            $TotalaPagar= number_format($Total,2);
            echo 'B/.  '. $TotalaPagar;
            ?>
        </td>
    </tr>
</table>