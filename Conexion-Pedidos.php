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
    $Fecha_Pedido = $_POST['Fecha_Pedido'];
    $Fecha_Entrega = $_POST['Fecha_Entrega'];
    $Estado = $_POST['Estado'];
    
    
    $consulta = "INSERT INTO pedidos(Producto,  Cantidad, Fecha_Pedido, Fecha_Entrega, Estado) 
    VALUES ('$Producto', '$Cantidad', '$Fecha_Pedido', '$Fecha_Entrega', '$Estado')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}
function eliminar($conexion){
    $Producto = $_POST['Producto'];
   

    $consulta = "DELETE FROMI pedidoss WHERE Producto='$Producto'";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    
}
?>