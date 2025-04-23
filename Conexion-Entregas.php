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
    $Producto = $_POST['Producto'];
    $Cantidad = $_POST['Cantidad'];
    $Fecha_Entrega = $_POST['Fecha_Entrega'];
    $Direccion = $_POST['Direccion'];
    $Condicion = $_POST['Condicion'];
    
    $consulta = "INSERT INTO entregas(Producto,  Cantidad, Fecha_Entrega, Direccion, Condicion) 
    VALUES ('$Producto', '$Cantidad', '$Fecha_Entrega', '$Direccion', '$Condicion')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}
function eliminar($conexion){
    $Producto = $_POST['Producto'];
   

    $consulta = "DELETE FROMI entregas WHERE Producto='$Producto'";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    
}
?>