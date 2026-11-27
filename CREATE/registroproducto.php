<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basededatos = "biblioBD6";
$conexion = new mysqli($servidor, $usuario, $contrasena, $basededatos);
if ($conexion->connect_error) {
die("Conexión fallida: " . $conexion->connect_error);
}
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$grado = $_POST['grado'];
$paralelo = $_POST['paralelo'];
$nivel = $_POST['nivel'];
$sql = "INSERT INTO lector (nombre, telefono, grado, paralelo, nivel) " .
"VALUES ('$nombre', '$telefono', '$grado', '$paralelo', '$nivel')";
if ($conexion->query($sql) === TRUE) {
echo "Nuevo lector registrado exitosamente";
} else {
echo "Error: " . $sql . "<br>" . $conexion->error;
}
$conexion->close();
?>
<br><br>
<a href="formRegistroProducto.php">Registrar otro lector</a> |
<a href="productos.php">Ver Lectores</a>