<?php
require '../Utils/ConexionDB.php'; 

$cnx=new ConexionDB();
$ruta=$cnx->ruta();


            $ruta1 = null;

if (isset($_GET['ruta'])) {

  $ruta1 = $_GET['ruta'];

}

echo $ruta1;


$table = 'productos';
$mode = 'DESC';

if ($ruta1 != null) {

  $init = ($ruta1 - 1) * 6;
  $max = 6;

} else {

  $ruta1 = 1;
  $init = 0;
  $max = 6;

}
$cnx=new ConexionDB();
$cn=$cnx->getConexion();

$statement = $cn->prepare("SELECT * FROM productos ORDER BY codpro $mode LIMIT $init, $max");
$statement->execute();
   
$productos = $statement->fetchAll();

if (is_array($productos) || is_object($productos)) {

    echo'<h2 class="group__title">CATALOGO DE PRODUCTOS</h2>';
    
    echo'<div class="container container--flex">';
    $num=0;
    for ($i = 0; $i < count($productos); $i ++) {
      if($num==3){ 
        echo "<tr>";
        $num=1; 
    }else{ 
        $num++;
    }
        
        
        echo'<div class="column column--50-25">';
       echo' <img src="../Imagenes/'.$productos[$i]['imagen'].'" class="catalogo__img" ><br>';
        
        echo'<i class="bx bx-show" title="Ver Producto" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="mostrarDetalle('.$productos[$i]['codpro'].')" class="btn__prodiuctos"></i>';
   
        echo' </div>';
  }
        echo'</div>'; 
        
    
   

} else {

  echo '<p>Aun no hay proyectos</p>';

}
        
if (is_array($productos) || is_object($productos)) {
    echo '<section class="pagination">';
    echo'<center>';
    echo'<ul>';
    $statement1 = $cn->prepare("SELECT * FROM $table");
    $statement1->execute();
    $cantProductos = $statement1->fetchAll();

                $pages = ceil(count($cantProductos) / 6);

                if ($ruta1 == 1) echo '<li><a class="no-link" href="'.$ruta.'?ruta='.($ruta1 - 1).'"><i class="icon-circle-left"></i></a></li>';

                else echo '<li><a href="'.$ruta.'?ruta='.($ruta1 - 1).'"><i class="icon-circle-left"></i></a></li>';
                

                for ($i = 1; $i <= $pages; $i ++) {

                  if ($ruta1 == $i) echo '<li><a class="active" href="'.$ruta.'?ruta='.$i.'">'.$i.'</a></li>';

                  else echo '<li><a href="'.$ruta.'?ruta='.$i.'">'.$i.'</a></li>';

                }

                if ($ruta1 == $pages)echo '<li><a class="no-link" href="'.$ruta.'?ruta='.($ruta1 + 1).'"><i class="icon-circle-right"></i></a></li>';

                else echo '<li><a href="'.$ruta.'?ruta='.($ruta1 + 1).'"><i class="icon-circle-right"></i></a></li>';
 
                echo '</ul>
            </center>
          </section>';
            }

           