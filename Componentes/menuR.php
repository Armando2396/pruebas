<div class="logo2"><!--Contenedor 1 logo-->
<img src="../Imagenes/BRANDINGLUTYLUI2.png" alt="">
   
</div><!--Fin Contenedor 1 logo-->


<div class="menuR"><!--Contenedor 2 Menu-->
    <nav>
        <ul> 
            <li> <a href="Catalogo.php" class="inicio2" >Inicio</a></li>
            <li><a href="Cesta.php" class="inicio2" >Cesta</a></li>
            <li><a href="sobreNos.php" class="inicio2" >Nosotros</i></a></li>
            <!--<li> 
            buscar
                <input type="search" placeholder="Buscar" name="busqueda" id="id-busqueda">
                <button onclick="searchproducto()"> 
                    <i class="fa fa-search"  name="aceptar" ></i>
                </button>   
            </li>-->
            
            <?php 
                if(!isset($_SESSION['acceso'])|| $_SESSION['acceso']<>true){
            ?>
                <li class="menu__item">
                    <!--login-->
                    <a href="" class="inicio2" data-bs-toggle="modal" data-bs-target="#LoginModal" >Iniciar Sección</a>
                </li>
            <?php
                }else{
            ?>
                <li class="menu__item">
                    <a href="" class="menu__link">Bienvenido <?php echo $_SESSION["nombre"];?> </a>
                </li>
                <li class="menu__item">
                    <a href="Cerrar.php" class="menu__link">Cerrar Sesion</a>
                </li>
            <?php 
                }
            ?>       
            <li></li>
           
        </ul>
    </nav>
 
</div><!--Fin Contenedor 2 Menu-->
<i class="fa-solid fa-bars" id="icon_menu2"></i><!--Icono del menu-->


<div class="header__register"><!--Contenedor 3 btn registrar-->          
</div><!--Contenedor 3 btn registrar-->
