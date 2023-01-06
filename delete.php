<?php
    include("conexion.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM estudiantes WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            die("La consulta falló");
        }

        $_SESSION['message'] = 'Dato eliminado exitosamente';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
    }
?>