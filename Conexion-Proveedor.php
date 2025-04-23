<?php

$conexion = mysqli_connect('localhost','root','','toyota') or die(mysqli_error($mysqli));
diferencia($conexion);

function diferencia($conexion){

    if(isset($_POST['Enviar'])){
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
    $NIT = $_POST['NIT'];
    $Email = $_POST['Email'];
    $Producto = $_POST['Producto'];
    $Calificacion = $_POST['Calificacion'];
    

    $consulta = "INSERT INTO proveedor(Nombre, Direccion, Telefono, NIT, Email,  Producto, Calificacion) 
    VALUES ('$Nombre', '$Direccion', '$Telefono', '$NIT', '$Email',  '$Producto', '$Calificacion')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}
function eliminar($conexion){
    $Nombre = $_POST['Nombre'];
   

    $consulta = "DELETE FROM proveedor WHERE Nombre='$Nombre'";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    
}
?>