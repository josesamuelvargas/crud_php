<?php include("conexion.php"); ?>

<?php include("includes/header.php"); ?>

<main class="container p-4">    
    <div class="row">        
        <div class="col-md-4">

            <?php if (isset($_SESSION['message'])) { ?> <!--inicio de alerta traida desde bootstrap-->
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert"> <!--mensaje de alerta viene de insertar.php línea 18 (se puede reemplazar el warning por  < ? = /*$SESSION['message_type']*/ ? > -->
                    <?= $_SESSION['message']?>  <!--mensaje viene de insertar.php línea 17-->
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> <!-- end div -->
            <?php session_unset(); }  ?> <!--fin de la alerta traida desde bootstrap /// session_unset es para limpiar la pantalla de los datos almacenados sesión-->

            <div class="card card-body"> <!-- tarjeta -->
                <form action="insertar.php" method="POST">
                    <div class="form-group p-2">
                        <input type="text" name="nombres" class="form-control" placeholder="Nombres Estudiante" autofocus>
                    </div>
                    <div class="form-group p-2">
                        <input type="text" name="apellidos" class="form-control" placeholder="Apellidos Estudiante" autofocus>
                    </div>
                    <div class="form-group p-2">
                        <input type="text" name="edad" class="form-control" placeholder="Edad Estudiante" autofocus>
                    </div>
                    <div class="form-group p-2">
                        <textarea name="descripcion" rows="2" class="form-control" placeholder="Descripción"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="insertar" value="Guardar">
                </form> <!-- end form -->
            </div> <!-- end div -->
        </div> <!-- end div -->
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>nombres</th>
                        <th>apellidos</th>
                        <th>edad</th>
                        <th>descripción</th>
                        <th>fecha_creacion</th>
                        <th>acciones</th>
                    </tr> <!-- end tr -->                   
                </thead> <!-- end thead -->
                <tbody> 
                    <?php
                        $query = "SELECT * FROM estudiantes";
                        $resultado_est = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($resultado_est)) {
                    ?>
                            <tr>
                                <td><?php echo $row['nombres'] ?></td>
                                <td><?php echo $row['apellidos'] ?></td>
                                <td><?php echo $row['edad'] ?></td>
                                <td><?php echo $row['descripcion'] ?></td>
                                <td><?php echo $row['fecha_creacion'] ?></td>
                                <td>
                                    <a href="editar.php?id=<?php echo $row['id']?>">
                                        Editar
                                    </a>
                                    <a href="eliminar.php?id=<?php echo $row['id']?>">
                                        Borrar
                                    </a>
                                    
                                </td>
                            </tr>
                    <?php } ?>
                </tbody> <!-- end tbody -->
            </table>  <!-- end table -->          
        </div> <!-- end div -->
    </div> <!-- end div -->
</main> <!-- end main -->
    
<?php include("includes/footer.php"); ?>