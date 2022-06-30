<!DOCTYPE html>
<?php
include'../DAO/MetodosAdmin.php';
$op=$_REQUEST['op'];
switch ($op){
    case 1:
        $cod="";
        $des="";
        $pre="";
        $stock="";
        $estado="";
        $detalle="";
        break;
    case 2:
        $cod = $_REQUEST['cod'];
        $objMetodos = new MetodosAdmin();
        $lista = $objMetodos->ListarProductosCod($cod);
        $cod=$lista[0];
        $des=$lista[1];
        $pre=$lista[2];
        $stock=$lista[3];
        $estado=$lista[4];
        $detalle=$lista[5];
        break;
    default:
    break;
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
    <form action="Mantenimiento.php" enctype="multipart/form-data" method="POST" >
        <table border="0" width="400px">
            <tr>
                <td>Codigo:</td>
                <td><input type="text" name="txtCod" value="<?php echo $cod; ?>" readonly="readonly"></td>
            </tr>
            <tr>
                <td>Descripcion: </td>
                <td><input type="text" name="txtDes" value="<?php echo $des; ?>"></td>
            </tr>
            <tr>
                <td>Precio: </td>
                <td><input type="text" name="txtPre" value="<?php echo $pre; ?>"></td>
            </tr>
            <tr>
                <td>Cantidad: </td>
                <td><input type="text" name="txtCan" value="<?php echo $stock; ?>" ></td>
            </tr>
            <tr>
                <td>Estado: </td>
                <td><input type="text" name="selectEstado" value="<?php echo $estado; ?>"></td>
            </tr>
            <tr>
                <td>Detalle: </td>
                <td><textarea name="txtDetalle" width="100" rows="3"class="form-control input-sm" style="margin-top: 5px;"><?php echo $detalle; ?></textarea>
            </tr>
            <tr>
                <td>Imagen: </td>
                <td><input name="archivo" type="file"  /></td>
            </tr>
            <tr style="margin-top: 5px;">
                <th><a href="Productos.php">Volver</a></th>
                <th><input type="submit" value="Guardar" name="btnGuardar"/></th>
                <input type="hidden" value="<?php echo $op;?>" name="op"/>
        </table>
    </form>
    
</body>
</html>