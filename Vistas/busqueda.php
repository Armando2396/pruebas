<!DOCTYPE html>
<?php
session_start();
$lista=$_SESSION['lista'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luty lui | Catalogo</title>
    <link href="https://file.myfontastic.com/pjkdydyYP2f7ARAztw8rNC/icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="../Css/stilo.css">
    <link rel="stylesheet" href="../Css/stiloMe.css">
    <link rel="stylesheet" href="../Css/menuRs.css">
    <link rel="stylesheet" href="../Css/estilobtn.css">
    <link rel="stylesheet" href="../Css/footer.css">
    <link href="https://file.myfontastic.com/pjkdydyYP2f7ARAztw8rNC/icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script> <!--Icono del menu-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> <!--codigo para usar los iconos de esa Web-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
   <!---------------------- Header ------------------------>
   
    
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




    

    <!-- Catalogo de producto -->
    <main class="main">
        <section class="group catalogo">
    <div class="title-sectionR">Resultados para <strong>"<?php echo $_GET['text']; ?>"</strong></div>
    <?php 


    include '../DAO/MetodosDAO.php';
    
$descripcion = $_REQUEST['text'];

if($descripcion==""){
        echo "<script language='javascript'>";
      echo "alert('Error!! Campo de Busqueda Vacio')";
        echo "window.location.replace('Location:Catalogo.php')";
        echo "</script>"; 
   // header("Location: Catalogo.php"); 

}else{
    $objMetodos = new MetodosDAO();
    $lista1 = $objMetodos->MostrarBusqueda($descripcion);
    include("../Componentes/Rbusqueda.php"); 
}

?>
</section>
    </main>
   

 <!-- Footer -->
 <footer class="pie-pagina">
    <?php include("../Componentes/footer2.php");?>
    </footer>

<!-- Modal producto-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<?php include("../Componentes/MProducto.php");?>
    </div>


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
    <!--Script boton buscar, efecto al tocar boton-->
    <script>
        const icon = document.querySelector('.icon');
        const search = document.querySelector('.search');
        icon.onclick = function(){
            search.classList.toggle('active')   
        }
    </script>
    
</body>
</html>