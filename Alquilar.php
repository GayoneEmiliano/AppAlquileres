<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Alquilar Inmueble</title>
</head>
<body>
    <div class="background">
        <div class="modal">
            <section class="left">
                <div class="title">
                    <h1>Alquilar inmuebles</h1>
                </div>
            </section>
            <section class="right">
                <div class="form-container">
                    <form id="Alquilar" action="./functionAlquilar.php" method="post" class="form">
                        <label for="name" class="label">Ingrese nombre del inquilino</label>
                        <input id="nombre"  type="text" class="input" placeholder="Ingrese el nombre">

                        <label for="apellido" class="label">Ingrese apellido del inquilino</label>
                        <input id="apellido"  type="text" class="input" placeholder="Ingrese el apellido">

                        <label for="departamento" class="label">Ingrese departamento a alquilar</label>
                        <input id="departamento" type="text"  class="input" placeholder="Ingrese el departamento">

                        <button type="submit" class="enviar">Guardar</button>

                    </form>

                    <a href="./index.html" class="close">Cerrar</a>
                </div>

                <div class="res" id="Respuesta">

                </div>
            </section>
        </div>
    </div>
    




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./FunctionAlquilar.js"></script>
</body>



</html>

