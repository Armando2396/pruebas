<?php 

      $inc = include ("../Utils/conexion.php");  

if ($inc){

$consulta = "Select * from clientes where codCli = 1 ";
$resultado = mysqli_query($conex,$consulta);

if ($resultado){

    while ($row = $resultado->fetch_array()){
        $id = $row['codCli'];
        $nombre = $row['nombre'];
        $correo = $row['correo'];
        $passw = $row['pas'];
        ?>
<div class="contenedor-inputs">

<h2><?php echo $nombre;?></h2>

<div>
    <p>
    <h2><b>Email: </b><?php echo $correo;?></h2><br>
    <h2> <b>Password: <?php echo $passw;?></h2></b><br>
    </p>

    </div>
    </div>


        <?php 
    }
}

}


            
 ?>