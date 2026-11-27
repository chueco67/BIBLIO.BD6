<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basededatos = "biblioBD6";
$conexion = new mysqli($servidor, $usuario, $contrasena, $basededatos);
if ($conexion->connect_error) {
die("Conexión fallida: " . $conexion->connect_error);
}
$id = $_GET['CI'];
$sql = "DELETE FROM lector WHERE CI = $id";
if ($conexion->query($sql) === TRUE) {
if ($conexion->affected_rows > 0) {
echo "El lector se eliminó exitosamente";
} else {
echo "No existe un lector con ese CI";
}
} else {
echo "Error al eliminar: " . $conexion->error;
}
$conexion->close();
?>
<br><br><a href="lectores.php">Volver a la lista</a>