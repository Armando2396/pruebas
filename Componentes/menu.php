<div class="container container--flex">
            <span class="icon-menu" id="btnmenu"></span>
            <ul class="menu" id="menu">
                
                <li class="menu__item">
                    <a href="Catalogo.php" class="menu__link menu__link--select">Inicio</a>
                </li>
                <li class="menu__item">
                    <a href="Cesta.php"  class="menu__link">Cesta</a>
                </li>
                <?php 
                if(!isset($_SESSION['acceso'])|| $_SESSION['acceso']<>true){
                ?>
                <li class="menu__item">
                    <a href="" data-bs-toggle="modal" data-bs-target="#LoginModal" class="menu__link">Iniciar Sesion</a>
                </li>

                 <?php

                }else{
            
                ?>
                <li class="menu__item">
                    <a href="" class="menu__link">Bienvenido <?php echo $_SESSION['nombre'];?></a>
                     <input type="button" class="btn__header-register" value="Registrarse">
                </li>
                <li class="menu__item">
                    <a href="Cerrar.php" class="menu__link">Cerrar Sesion</a>
                </li>
                <?php 
                }
                ?>
                              
                
            </ul>
        </div>