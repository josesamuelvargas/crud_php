<?php include("conexion.php") ?>

<?php include("includes/header.php") ?>

<div class="container">
    
    <div class="row">
        
        <div class="col-md-4">

            <div class="card card-body"> <!-- tarjeta -->
                <form action="insertar.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombres" class="form-control" placeholder="Nombres Estudiante" autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name="apellidos" class="form-control" placeholder="Apellidos Estudiante" autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name="edad" class="form-control" placeholder="Edad Estudiante" autofocus>
                    </div>

                    <div class="form-group">
                        <textarea name="descripcion" id="" rows="2" class="form-control" placeholder="Descripción"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="guardar_estudiante" value="Guardar">
                </form>
            </div>

        </div>

        <div class="col-md-8">
            
        </div>

    </div>

</div>    
    
<?php include("includes/footer.php") ?>