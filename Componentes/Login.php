<div class="modal-dialog login_mdial">
            <div class="modal-content">
            <div class="modal-header login_mheader">
                <h5 class="modal-title l_mtitle" id="exampleModalLabel">Inicio de Sesion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="Valida.php">

           
            <div class="modal-body" id="mostrar">
                <table border="0" align="center" class="">
                    <tr>
                        <td class="td_list">Correo:</td>
                        <td><input type="text" name="txtUsu"></td>
                    </tr><tr>
                        <td class="td_list">Contraseña:</td>
                        <td><input type="password" name="txtPas"></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn-seccion">Cerrar</button>
                <button onclick="submit()" class="btn-seccion">Iniciar Sesion</button>
            </div>
            <h6 align="center" >¿No tiene una cuenta? <a href="Registro.php" class="en_registrar"> Registrarse </a></h6>
            <h6 align="center" >¿Olvido su contraseña?<a href="formrescue.php" class="en_recuperar"> Recuperar contraseña </a></h6>
            </form>
            </div>
        </div>
        