<?php

include("conexion.php");

if (isset($_POST['insertar'])) {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $descripcion = $_POST['descripcion'];
    
    $query = "INSERT INTO estudiantes(nombres, apellidos, edad, descripcion) VALUES ($nombres, $apellidos, $edad, $descripcion)"; //recepción de los datos desde el formulario
    $result = mysqli_query($conn, $query); //almacenamiento de los datos en la BD - cadena de conexión $conn y consulta $query
    if ($result) {
        die("Consulta fallida");
    }
    echo 'Guardado';
}

?>