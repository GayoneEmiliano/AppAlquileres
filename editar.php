<?php
    session_start();
    $con = mysqli_connect("localhost","root","","datos_alquileres");
    mysqli_set_charset($con, "utf8");

    $id = $_GET['ID'];
    $modi = "SELECT * FROM inmuebles where ID = $id";
    $editar = $con ->query($modi);
    $dato = $editar -> fetch_array();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Modificar Inmueble</title>
</head>
<body>
    <div class="background">
        <div class="modal">
            <section class="left">
                <div class="title">
                    <h1>Modificar inmuebles</h1>
                </div>
            </section>
            <section class="right">
                <div class="form-container">
                    <form action="./GuardarDatos.php" method="POST" class="form" id="Editar">

                        <input type="hidden" name="IDENTIFICAR" id="IDENTIFICAR" value="<?php echo $dato['ID'] ?>">

                        <label for="name" class="label">Ingrese nombre del inmueble</label>
                        <input id="nombreE" name="nameE" type="text" class="input" placeholder="Ingrese el nombre" value="<?php echo $dato['name_inmueble'] ?>">

                        <label for="ubicacion" class="label">Ubicacion del inmueble</label>
                        <input id="ubicacionE" name="ubicacionE" type="text" class="input" placeholder="Ingrese la ubicacion" value="<?php echo $dato['Ubicacion_inmueble'] ?>">

                        <label for="ambientes" class="label">Cantidad de ambientes</label>
                        <input id="ambientesE" type="number" name="ambientesE" class="input" placeholder="Ingrese los ambientes" value="<?php echo $dato['Ambientes'] ?>">

                        <label for="precio" class="label">Precio del inmueble</label>
                        <input id="precioE" type="number" class="input" name="precioE" placeholder="Ingrese el precio" value="<?php echo $dato['Precio'] ?>">

                        <button name="guardar" type="submit" class="enviar">Guardar</button>

                    </form>

                    <a href="./index.html" class="close">Cerrar</a>
                </div>

                <div class="res" id="Respuesta">

                </div>
            </section>
        </div>
    </div>
    




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./GuardarDatos.js"></script>
</body>



</html>