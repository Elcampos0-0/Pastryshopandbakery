<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    include("conexion.php");//Llamar al archivo connection.
    if (isset($_POST['enviar'])){
        $_nombre = $_POST['nombre'];
        $_producto = $_POST['producto'];
        $_telefono = $_POST['telefono'];
        $_cantidad = $_POST['cantidad'];
        $_comentario = $_POST['comentario'];
    
    //Sentencia SQL
    $sql="INSERT INTO form(nombre,producto,telefono,cantidad,comentario) VALUES('$_nombre','$_producto','$_telefono','$_cantidad','$_comentario')";
 $query = mysqli_query($con, $sql);
    
    if($query){
        echo "¡Éxito! Usuario insertado.";
    } else {
        // ESTA LÍNEA ES CLAVE: Te dirá qué tiene de malo tu base de datos
        echo "Error de SQL: " . mysqli_error($con);
    }
} else {
    echo "El formulario no está enviando el nombre 'enviar'.";
}
?>