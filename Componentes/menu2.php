

<div class="logo"><!--Contenedor 1 logo-->
<img src="../Imagenes/BRANDINGLUTYLUI2.png" alt="">
   
</div><!--Fin Contenedor 1 logo-->


<div class="menu"><!--Contenedor 2 Menu-->
    <nav>
        <ul> 
            <li> <a href="Catalogo.php" class="inicioIcn" title="Inicio"><i class='bx bx-home-alt'></i></a></li>
            <li><a href="Cesta.php" class="inicioIcn" title="Cesta"><i class='bx bx-cart'></i></a></li>
            <li><a href="sobreNos.php" class="inicioIcn" title="Nosotros"><i class='bx bxs-contact' ></i></a></li>
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
                    <a href="" class="inicioIcn" data-bs-toggle="modal" data-bs-target="#LoginModal" title="Iniciar Sección"><i class='bx bx-user'></i></a>
                </li>
            <?php
                }else{
            ?>
                <li class="menu__item">
                    
                    
                    <!--Perfil-->
                    <div class="actionp" title="Perfil">
                       <div class="profile">
                        <a href="perfil.php"><img src="../Imagenes/avatar.jpg" ></a>
                       </div>
                       <a title="Perfil" href="perfil.php" class="nombreA"><?php echo $_SESSION['nombre']; ?> </a>
                    </div> 



                </li>
                <li class="menu__item">
                    <a  href="Cerrar.php" class="inicioIcn" title="Cerrar Sección"><i class='bx bx-log-out'></i></a>  
                </li>
            <?php 
                }
            ?>       
            <li></li>
           
        </ul>
    </nav>
    <!--icono Buscar-->
    <div class="search">
          <div class="icon" title="Buscar"></div>
          <div class="input" >
             <input type="text" placeholder="Buscar"  name="busqueda" id="id-busqueda">
          </div> 
          <!--icono de la X-->
          <span class="clear" onclick="document.getElementById('id-busqueda').value = ''"></span>
         </div>
</div><!--Fin Contenedor 2 Menu-->
<i class="fa-solid fa-bars" id="icon_menu"></i><!--Icono del menu-->


<div class="header__register"><!--Contenedor 3 btn registrar-->          
</div><!--Contenedor 3 btn registrar-->
