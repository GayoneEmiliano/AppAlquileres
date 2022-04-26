<?php

    $con = mysqli_connect("localhost","root","","datos_alquileres");
    
    $IDEN = $_POST['id'];
    $name = $_POST['nombre'];
    $ubi = $_POST['ubicacion'];
    $amb = $_POST['ambientes'];
    $precio = $_POST['precio'];
    

    $cons = "UPDATE inmuebles SET name_inmueble = '$name', Ubicacion_inmueble = '$ubi', Ambientes = '$amb', Precio = '$precio' WHERE ID = $IDEN ";
    $res = mysqli_query($con, $cons);
        
       

?>