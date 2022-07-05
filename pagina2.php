<?php

$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];


echo $nombre. "dijo <br/>".$mensaje;

if(mail('carlosjfm24@gmail.com',$asunto, $mensaje)){
    
    echo "se envio";
    
    
}else{
    
    echo "no se envio";
}

?>