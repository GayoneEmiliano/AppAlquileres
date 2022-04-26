<?php
    
    $con = mysqli_connect("localhost","root","","datos_alquileres");
    
    $name = $_POST['nombre'];
    $ubi = $_POST['ubicacion'];
    $amb = $_POST['ambientes'];
    $precio = $_POST['precio'];
    $amb = $_POST['ambientes'];

    $cons = "INSERT INTO inmuebles(name_inmueble, Ubicacion_inmueble, Ambientes, Precio) VALUES ('$name','$ubi','$amb','$precio')";
    $res = mysqli_query($con, $cons);

    
?>