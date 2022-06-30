<h2 class="group__title">Resultado de la Busqueda</h2>
            <div class="container container--flex">
                        <?php
                            $num=0;
                           if($lista1==null){

                           echo("No hay Busqueda  Relacionada");
                               
                        }else{
                            foreach ($lista1 as $reg){
                               
                                if($num==3){
                                    echo "<tr align='center'>";
                                    $num=1;
                                }else{
                                    $num++;
                                 
                            }
                    
                        

                        }
                        
                        ?>
                  <div class="column column--50-25">
                            <img src="../Imagenes/<?php echo $reg[6];?>" class="catalogo__img" ><br>
                            <!--<button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="mostrarDetalle(<?php echo $reg[0];?>)" class="btn__prodiuctos"> 
                                Vista Previa
                            </button>-->
                            <i class='bx bx-show' title="Ver Producto" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="mostrarDetalle(<?php echo $reg[0];?>)" class="btn__prodiuctos"></i>
                        </div>
                        <?php
                            }
                        ?>
                    
            </div>