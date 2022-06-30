<?php

class ConexionDB{

    public function getConexion(){
    $cnx = new PDO("mysql:host=localhost; dbname=lutylui","root","");
    return $cnx;
} 

public function ruta () {

    return 'http://localhost/LutyLui/Vistas/Catalogo.php';

  }
}

?>