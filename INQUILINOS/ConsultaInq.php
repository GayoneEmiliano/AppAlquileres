<?php
    $con = mysqli_connect("localhost","root","","datos_alquileres");
    mysqli_set_charset($con, "utf8");
    $inquilinos = "SELECT * FROM inquilinos";
    ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <title>Consultar Alquileres</title>
    </head>
    <body>
        <div class="background-datos">
            <div class="modal-inquilinos">
                <div class="table-container">
                    <div class="table-title">Propiedades disponibles</div>
                    <div class="header">
                        <div class="table-head">Nombre</div>
                        <div class="table-head">Ubicacion</div>
                        <div class="table-head">Ambientes</div>
                        <div class="table-head">Options</div>

                    </div>
                    <div class="table-item-cont">

                        <?php $resultado = mysqli_query($con, $inquilinos);
                            while($row = mysqli_fetch_assoc($resultado)){

                        ?>
                            <div id="nombre" class="table-item "><?php echo $row['Nombre']; ?></div>
                            <div id="ubicacion" class="table-item"><?php echo $row['Apellido']; ?></div>
                            <div id="ambientes" class="table-item"><?php echo $row['Departamento']; ?></div>
                            <div id="Options" class="table-item">
                                <a href="borrarInq.php?ID= <?php echo $row['ID']; ?>" class="btn-option borrar">Borrar</a>

                            </div>

                        <?php } ?>
                    </div>
                </div>
                
            </div>
            
            <div class="button-close">
                <a href="./index.html" class="close">Cerrar</a>
            </div>
        </div>
    
    </body>
</html>