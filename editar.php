<?php
    include("conexion.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM estudiantes WHERE id=$id";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)) {
            $row = mysqli_fetch_array($result);
            $nombres = $row['nombres'];
            $apellidos = $row['apellidos'];
            $edad = $row['edad'];
            $descripcion = $row['descripcion'];            
        }
    }
?>

<?php include("includes/header.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="">
                    <div class="fomr-group">
                        <input type="text" name="nombres" value="<?php echo $nombres; ?>" class="form-control" placeholder="Actualiza los nombres">
                    </div>
                    <div class="fomr-group">
                        <input type="text" name="apellidos" value="<?php echo $apellidos; ?>" class="form-control" placeholder="Actualiza los apellidos">
                    </div>
                    <div class="fomr-group">
                        <input type="text" name="edad" value="<?php echo $edad; ?>" class="form-control" placeholder="Actualiza la edad">
                    </div>
                    <div class="form-group">
                        <textarea name="descripcion" rows="2" class="form-control" placeholder="Actualiza la descripción"><?php echo $descripcion ?></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php")?>