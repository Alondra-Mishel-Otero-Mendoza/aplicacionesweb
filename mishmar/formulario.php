<?php
$servername = "localhost";
$database = "mishmar";
$username = "localhost";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection

$nombre=$_POST['nombre'];
$apellido_paterno=$_POST['apellido_paterno'];
$apellido_materno=$_POST['apellido_materno'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$correo=$_POST['correo'];
//sentencia sql
$sql="INSERT INTO usuarios VALUES('$nombre','$apellido_paterno','$apellido_materno','$usuario','$contrasena','$correo')";
//ejecutamos la sentencia de sql
$ejecutar = mysqli_query($conn, $sql);
//verificar la ejecucion
if(!$ejecutar){
    echo"hubo algun error";
}else{
    echo"Guardado con exito <br><a href='formulario.html'>Volver</a>";
 }
//ejecutamos la sentencia de sql

?>
