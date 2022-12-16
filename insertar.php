<?php

include("conexion.php");

if (isset($_POST['insertar'])) {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $descripcion = $_POST['descripcion'];
    
    $query = "INSERT INTO estudiantes(nombres, apellidos, edad, descripcion) VALUES ('$nombres', '$apellidos', '$edad', '$descripcion')"; //recepción de los datos desde el formulario
    $result = mysqli_query($conn, $query); //almacenamiento de los datos en la BD - cadena de conexión $conn y consulta $query
    if (!$result) { //si la consulta no existe o no funciona, arroja error "consulta fallida"
        die("Consulta fallida");
    }

    $_SESSION['message'] = 'Datos guardados exitosamente'; // muestra mensaje (trabaja en conjunto con session de la BD en modulo conexion.php)
    $_SESSION['message_type'] = 'success'; //esta línea es para que bootstrap asigne color automáticamente con el atributo success (success asigna color VERDE automáticamente, en cambio warning asigna color AMARILLO y danger asigna color ROJO)

    header("Location: index.php");
}

?>