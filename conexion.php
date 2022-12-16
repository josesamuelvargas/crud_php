<?php

session_start();

$conn = mysqli_connect(
    'localhost', //ubicación de la BD
    'root', //usuario de la BD
    '', //contraseña de la BD
    'crud_php' //nombre de la BD creada en phpmyadmin
);

//prueba de funcionamiento de la BD
/*if(isset($con)){
    echo 'la conexión de la bd está funcionando';
}*/

?>