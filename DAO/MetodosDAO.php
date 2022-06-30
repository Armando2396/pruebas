<?php

include '../Utils/ConexionDB.php';
include '../Beans/Cliente.php';
include '../Beans/DetallePedido.php';
include '../Beans/Pedido.php';


class MetodosDAO{

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
     
    public function ListarProductosCod($cod){    //recibira el codigo como parametro
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
   
        $res=$cn->prepare("select * from productos where codPro=$cod");
       // $res=$cn->prepare("CALL ListarProdcutosCod ($cod)");
        $res->execute();

        foreach($res as $row){
            $lista[]=$row;
        }   
        return $lista;
    }
    public function MostrarBusqueda($descripcion){
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
         $lista1=[];
        //$res=$cn->prepare("SELECT * FROM productos WHERE descripcion LIKE $descripcion");
        $res=$cn->prepare("SELECT * FROM productos WHERE descripcion LIKE concat('%$descripcion%')");
    // $res=$cn->prepare("CALL MostrasBusqueda ('$descripcion')"); 
      $res->execute();
        foreach($res as $row){
            $lista1[]=$row;
            echo("row");
        }  
        
        return $lista1;
    
    }
    public function validarUsuario(Cliente $cli){    
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();

        $res=$cn->prepare("select * from clientes where correo='$cli->correo' and pas='$cli->pas'");
        $res->execute();

        foreach($res as $row){
            $lista=$row;
        }   
        return $lista;
    }
    public function RegistrarCliente(Cliente $cli){
        $i=0;
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res=$cn->prepare("INSERT  INTO clientes VALUES(0,'$cli->nomCli','$cli->apeCli','$cli->correo','$cli->pas','$cli->dirCli');");
        $i=$res->execute();
        return  $i;
    }
    public function RegistrarPedido(Pedido $ped){
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res=$cn->prepare("INSERT INTO pedido VALUES(null,'$ped->codCli', '$ped->fecha');");
        $res->execute();
    }
    public function numeroPed(){    
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res=$cn->prepare("select max(numPedido) from pedido");
        $res->execute();
        foreach($res as $row)
        {
            $num=$row;
        }   
        return $num;
    }
    public function RegistrarDetallePedido(DetallePedido $det){
        $cnx=new ConexionDB();
        $cn=$cnx->getConexion();
        $res=$cn->prepare("INSERT  INTO detallepedido VALUES($det->num, $det->codpro, $det->can);");
        $res->execute();
    }

}


?>