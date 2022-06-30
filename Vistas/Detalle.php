<!DOCTYPE html>
<?php 

include '../DAO/MetodosDAO.php';


$cod = $_REQUEST['cod'];

$objMetodos = new MetodosDAO();
$lista = $objMetodos->ListarProductosCod($cod);

foreach($lista as $row){
    $nombre=$row[1];
    $precio=$row[2];
    $detalle=$row[5]; 
}


?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../DAO/TiendaDAO.php" class="form2">
        <table class="table2" >
            <tr>
                <th rowspan="4" class="t_head1">
                    <img src="../Imagenes/<?php echo $nombre;?>.jpg"  width="200" height="170" class="img_C">
                </th>
                <th class="nombre_P">
                    <?php echo $nombre; ?>
                </th>
            </tr>
            <tr class="detalle_P">
                <td align="justify"><?php echo $detalle; ?></td>
            </tr>
            <tr>
                <th align="right" class="precio_P">
                    <p>Precio: B/. <?php echo $precio; ?></>
                </th>  
            </tr>
            <tr>
                <td align="right" class="cantidad_P">
                    Ingrese Cantidad: <input type="number" min="1" max="100" value="1" name="txtCan">
                </td>
            </tr>
            <!--<tr>
                <th align="right" colspan="2">
                    <br>
                    <button type="button" class="btnCarrito">Cerrar</button> 
                </th>
            </tr>-->
        </table>

        <div class="div_boto">
            <button type="button" onclick="submit()" class="btnCarrito">Agregar a Carrito</button>
        </div> 

        <input type="hidden" name="id" value="<?php echo $cod ?>">
        <input type="hidden" name="accion" value="agregar">
        <input type="hidden" name="op" value="2">
    </form>
</body>
</html>