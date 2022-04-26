<?php

    $con = mysqli_connect("localhost","root","","datos_alquileres");
    mysqli_set_charset($con, "utf8");

    $id= $_GET['ID'];
    $Borrar = "DELETE FROM inquilinos WHERE ID = $id";

    $Borra = $con ->query($Borrar);
    header("location:consultaInq.php");
    $con ->close();

?>