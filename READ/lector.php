<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basededatos = "biblioBD6";
$conexion = new mysqli($servidor, $usuario, $contrasena, $basededatos);
if ($conexion->connect_error) {
die("Conexión fallida: " . $conexion->connect_error);
}
$conexion->set_charset("utf8mb4");
$id = (int) $_GET['id'];
$sql = "SELECT * FROM lector WHERE id = $id";
$resultado = $conexion->query($sql);
if ($fila = $resultado->fetch_assoc()) {
echo "CI: " . $fila['CI'] . "<br>";
echo "Nombre: " . $fila['nombre'] . "<br>";
echo "Telefono: " . $fila['telefono'] . "<br>";
echo "Grado: " . $fila['grado'] . "<br>";
echo "Paralelo: " . $fila['paralelo'] . "<br>";
echo "Nivel: " . $fila['nivel'] . "<br>";
} else {
echo "El lector no existe.";
}
$conexion->close();
?>
<br><a href="lectores.php">Volver a la lista</a>