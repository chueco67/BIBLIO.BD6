<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basededatos = "guiacrud";
$conexion = new mysqli($servidor, $usuario, $contrasena, $basededatos);
if ($conexion->connect_error) {
die("Conexión fallida: " . $conexion->connect_error);
}
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$sql = "INSERT INTO producto (nombre, precio, cantidad) " .
"VALUES ('$nombre', '$precio', '$cantidad')";
if ($conexion->query($sql) === TRUE) {
echo "Nuevo producto creado exitosamente";
} else {
echo "Error: " . $sql . "<br>" . $conexion->error;
}
$conexion->close();
?>
<br><br>
<a href="formRegistroProducto.php">Registrar otro producto</a> |
<a href="productos.php">Ver productos</a>