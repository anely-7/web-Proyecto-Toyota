<?php

$conexion = mysqli_connect('localhost','root','','toyota')or die(mysqli_error($mysqli));
diferencia($conexion);

function diferencia($conexion){

    if(isset($_POST['Registrar'])){
        insertar($conexion);
    }
    if(isset($_POST['Borrar'])){
        eliminar($conexion);
    }
}
insertar($conexion);

function insertar($conexion){
    $Nombre = $_POST['Nombre'];
    $Direccion = $_POST['Direccion'];
    $Telefono = $_POST['Telefono'];
    $Email = $_POST['Email'];
    $NIT = $_POST['NIT'];
    $Propietario = $_POST['Propietario'];
    $Horarios = $_POST['Horarios'];
    

    $consulta = "INSERT INTO empresa(Nombre, Direccion, Telefono, Email, NIT, Propietario, Horarios) 
    VALUES ('$Nombre', '$Direccion', '$Telefono', '$Email', '$NIT', '$Propietario', '$Horarios')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}
function eliminar($conexion){
    $Nombre = $_POST['Nombre'];
   

    $consulta = "DELETE FROM empresa WHERE Nombre='$Nombre'";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    

    
}
?>