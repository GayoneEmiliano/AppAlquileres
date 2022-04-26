<?php
    
    $con = mysqli_connect("localhost","root","","datos_alquileres");
    /*
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dep = $_POST['departamento'];
*/
    $nombre = $_POST['juan'];
    $apellido = "martinez";
    $dep = "depto1";
    $cons = "INSERT INTO `inquilinos`(`Nombre`, `Apellido`, `Departamento`, `ID`) VALUES ('[$nombre]','[$apellido]','[$dep]','')";
    $res = mysqli_query($con, $cons);

    
?>