<?php
include '../Utils/ConexionDB.php';
include '../Beans/Producto.php';

class MetodosAdmin{
    public function validarUsuario($correo,$pas){
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res=$cn->prepare("select * from usuarios where correo='$correo'and pasUsu='$pas'");
        $res->execute();
        $cn=null;
        foreach($res as$row)
        {
            $lista=$row;
        }
        return $lista;
    }
    public function ListarProductos(){
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();

        $res=$cn->prepare("select * from productos");
        //$res=$cn->prepare("CALL Listar_Productos ()");
        $res->execute();

        foreach($res as $row){
            $lista[]=$row;
        }   
        return $lista;
    }

    public function grabarProducto($descripcion,$Precio,$Cantidad,$Estado, $Detalle,$img){
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res=$cn->prepare("INSERT into productos VALUES(null,'$descripcion','$Precio', '$Cantidad','$Estado','$Detalle','$img')");
        $res->execute();         
    }
    public function editarProducto($Codigo,$descripcion,$Precio,$Cantidad,$Estado, $Detalle,$img){
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res=$cn->prepare("update productos set descripcion='$descripcion',precio=$Precio,"
                . "stock=$Cantidad,estado='$Estado',detalle='$Detalle',imagen='$img'"
                . " where codpro=$Codigo"); 
        $res->execute();        
    }
    public function eliminarProducto($cod){
        
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res=$cn->prepare("delete from productos where codpro=$cod");
        $res->execute();        
    }
    public function ListarProductosCod($cod){
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res = $cn->prepare("select * from productos where codPro=$cod");
        $res->execute();
        foreach ($res as $row)
        {
            $lista=$row;
        }
        return $lista;
    }
    public function ListarPedidos(){
        $cnx= new ConexionDB();
        $cn=$cnx->getConexion();
        $res = $cn->prepare("select v.numpedido,v.codCli,c.nombre,v.fecha"
        . " from pedido v inner join clientes c on v.codcli=c.codcli");
        $res->execute();
        foreach ($res as $row){
            $lista[]=$row;
        }
        return $lista;
    }
    public function ListarPedidosNum($num){
        $cnx= new ConexionDB();
        $cn=$cnx->getConexion();
        $res = $cn->prepare("select d.numpedido, d.codpro, p.descripcion, p.precio, d.can from detallepedido d inner join productos p on d.codpro=p.codpro where numpedido=$num");
        $res->execute();
        $cn=null;
        foreach ($res as $row){
            $lista[]=$row;
        }
        return $lista;
    }
    public function ListarClientes(){
        $cnx= new ConexionDB();
        $cn=$cnx->getConexion();
        $res = $cn->prepare("select * from clientes");
        $res->execute();
        $cn=null;
        foreach ($res as $row){
            $lista[]=$row;
        }
        return $lista;
    }
    
}
?>