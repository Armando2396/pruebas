<?php
include '../DAO/MetodosAdmin.php';

$op=$_REQUEST['op'];

switch ($op) {
    case 1:
    
    $Codigo=$_REQUEST['txtCod'];
    $descripcion= $_REQUEST['txtDes'];
    $Precio=$_REQUEST['txtPre'];
    $Cantidad=$_REQUEST['txtCan'];
    $Estado=$_REQUEST['selectEstado'];
    $Detalle=$_REQUEST['txtDetalle'];
    $target_path = "../Imagenes/";
    $target_path = $target_path . basename( $_FILES['archivo']['name']); 
    move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path);
    $img=basename( $_FILES['archivo']['name']);
     /*echo($descripcion);
     echo($Precio);
     echo($Cantidad);
     echo($Estado);
     echo($Detalle);*/
      // $objPro=new Producto(0, $_REQUEST['txtDes'],$_REQUEST['txtPre'],$_REQUEST['txtCan'],$_REQUEST['selectEstado'],$_REQUEST['txtDetalle'],$img);

    // $objPro=new Producto(0, $descripcion,$Precio,$Cantidad,$Estado, $Detalle,$img);
     $metodos=new MetodosAdmin();
     $metodos->grabarProducto( $descripcion,$Precio,$Cantidad,$Estado, $Detalle,$img); 
     
    header('Location: Productos.php');
 
        break;
    
    case 2:
       
        $Codigo=$_REQUEST['txtCod'];
        $descripcion= $_REQUEST['txtDes'];
        $Precio=$_REQUEST['txtPre'];
        $Cantidad=$_REQUEST['txtCan'];
        $Estado=$_REQUEST['selectEstado'];
        $Detalle=$_REQUEST['txtDetalle'];
        $target_path = "../Imagenes/";
        $target_path = $target_path . basename( $_FILES['archivo']['name']); 
        move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path);
        $img=basename( $_FILES['archivo']['name']);
       // $objPro=new Producto($_REQUEST['txtCod'], $_REQUEST['txtDes'],$_REQUEST['txtPre'],
       // $_REQUEST['txtCan'],$_REQUEST['selectEstado'],$_REQUEST['txtDetalle'],$img);
        $metodos=new MetodosAdmin();
        $metodos->editarProducto($Codigo,$descripcion,$Precio,$Cantidad,$Estado, $Detalle,$img);
        header('Location: Productos.php');
        break;
    case 3:
        $metodos=new MetodosAdmin();
        $metodos->eliminarProducto($_REQUEST['cod']);
        header('Location: Productos.php');
        break;
    default:
        break;
}

?>