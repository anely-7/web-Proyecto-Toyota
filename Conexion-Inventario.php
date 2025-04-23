<?php

$conexion = mysqli_connect('localhost','root','','toyota') or die(mysqli_error($mysqli));
diferencia($conexion);

function diferencia($conexion){

    if(isset($_POST['Generar'])){
        insertar($conexion);
    }
    if(isset($_POST['Borrar'])){
        eliminar($conexion);
    }
}
insertar($conexion);

function insertar($conexion){
    $Modelo = $_POST['Modelo'];
    $Marca = $_POST['Marca'];
    $Fecha = $_POST['Fecha'];
    $Precio = $_POST['Precio'];
    $Codigo = $_POST['Codigo'];
    $Cantidad = $_POST['Cantidad'];
    $Proveedor = $_POST['Proveedor'];
    
    $consulta = "INSERT INTO inventario(Modelo,  Marca, Fecha, Precio, Codigo, Cantidad, Proveedor) 
    VALUES ('$Modelo', '$Marca', '$Fecha', '$Precio', '$Codigo', '$Cantidad', '$Proveedor')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}
function eliminar($conexion){
    $Modelo = $_POST['Modelo'];
   

    $consulta = "DELETE FROMI invetario WHERE Modelo='$Modelo'";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    
}
?>