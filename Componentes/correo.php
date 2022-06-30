<?php
if(!empty($_POST['Nombre']) && !empty($_POST['email']) && !empty($_POST['Pregunta'])){
    $nombre=$_POST['Nombre'];
    $Correo=$_POST['email'];
    $Pregunta=$_POST['Pregunta'];
$header="From:kelvinsa273@gmail.com" ."\r\n";
$header="Reply-To:kelvinsa273@gmail.com" ."\r\n";
$header="X-Mailer:PHP/".phpversion();
$mail=@mail($Correo,$nombre,$Pregunta);

if($mail){
    echo("Se envio Correctamente");
}
}
?>