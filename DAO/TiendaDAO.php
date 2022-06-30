<?php
session_start();

$op=$_REQUEST['op'];
include '../DAO/MetodosDAO.php';

switch($op){
    case 1:
        unset($_session['lista']);
        $objMetodo=new MetodosDAO();
        $lista=$objMetodo->ListarProductos();
        $_SESSION['lista']=$lista;
        header("Location: ../Vistas/Catalogo.php");
        break;
    case 2:
        if (isset($_REQUEST['id'])){
            $id=$_REQUEST['id'];
        }else{
            $id=1;
        }

        if (isset($_REQUEST['accion'])){
            $accion=$_REQUEST['accion'];
        }else{
            $accion='vacio';
        }

        switch ($accion) {
            case 'agregar':
                $can=$_REQUEST['txtCan'];
                if (isset($_SESSION['cesta'][$id])) 
                    $_SESSION['cesta'][$id]+=$can;
                else
                    $_SESSION['cesta'][$id]=$can;
                
                break;
            case 'eliminar':
                if (isset($_SESSION['cesta'][$id])) {
                    $_SESSION['cesta'][$id]--;
                    if ($_SESSION['cesta'][$id]==0) {
                        unset($_SESSION['cesta'][$id]);
                    }
                }
                break;
            case 'vacio':
                unset($_SESSION['cesta']);
                break;
            default:
                # code...
                break;
        }
        header("Location: ../Vistas/Cesta.php");
        break;
}

?>