<!DOCTYPE html>
<?php

session_start();
include '../DAO/MetodosDAO.php';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/stilo.css">
    <link rel="stylesheet" href="../Css/menuRs.css">
    <link rel="stylesheet" href="../Css/stiloMe.css">
    <link rel="stylesheet" href="../Css/sobreNos.css">
    <link rel="stylesheet" href="../Css/estilobtn.css">
    <link rel="stylesheet" href="../Css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Cesta</title>
    <link href="https://file.myfontastic.com/pjkdydyYP2f7ARAztw8rNC/icons.css" rel="stylesheet"><!--Icono Redes-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"><!--Icono Buscar-->
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script> <!--Icono del menu-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> <!--codigo para usar los iconos de esa Web-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
      
      <!-----------Inicia Menu-->
<div class="container__header">	
    <script type="text/javascript" src="js1/busqueda.js"></script>
    <?php include("../Componentes/menu2.php");?>
    </div>
<!-----------Fin Menu-->

<!-----------Inicia MenuR-->
<div class="container__header2">	
    <script type="text/javascript" src="js1/busqueda.js"></script>
    <?php include("../Componentes/menuR.php");?>
    </div>
<!-----------Fin MenuR-->
<br>
<!-----------Inicia descripción-->
  <div class="descripciónSN">
     <p>Estamos ubicados en Penonomé....</p>
  </div> 
<!-----------Inicia Mapa-->
  <div class="mapa">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.776045890307!2d-80.35977118255616!3d8.521111600000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fac4f6b3440bc7f%3A0x428ae89b3885547f!2sAlmacen%20Luty%20Lui!5e0!3m2!1ses!2spa!4v1653932613583!5m2!1ses!2spa" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>          


  <!-- Footer -->
  <footer class="pie-pagina">
    <?php include("../Componentes/footer2.php");?>
    </footer>

 <!-- Modal login-->
 <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php include("../Componentes/Login.php");?>
    </div>



    <script type="text/javascript">
        var resultado=document.getElementById("mostrar");
        function mostrarDetalle(cod){
            //validamos navegador que estamos utilizando
            var xmlhttp;
            if(window.XMLHttpRequest){
                xmlhttp=new XMLHttpRequest();
            }else{
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function(){
                if(xmlhttp.readyState===4 && xmlhttp.status===200){
                 resultado.innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","detalle.php?cod="+cod,true);
            xmlhttp.send();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
   <!--<script src="../js/menuS.js"></script>Para el menu-->
   <script src="../js/menuRes.js"></script><!--Para el menuR-->
    <script src="../js/slideJS.js"></script><!--Para el menu-->
</body>
</html>