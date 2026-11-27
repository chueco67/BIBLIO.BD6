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
            $sql = "SELECT * FROM lector WHERE CI = $id";
            $resultado = $conexion->query($sql);
    if ($fila = $resultado->fetch_assoc()) {

            $nombre = $fila['nombre'];
            $telefono = $fila['telefono'];
            $grado = $fila['grado'];
            $paralelo = $fila['paralelo'];
            $nivel = $fila['nivel'];

    } else {
    die("El lector no existe.");
    }
    $conexion->close();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar lector</title>
    </head>
<body>
    <h2>Editar lector</h2>

        <form action="registroEditar.php" method="post">
        <input type="hidden" name="CI" value="<?= $id ?>">
 
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"
        value="<?= htmlspecialchars($nombre) ?>" required>
    
        <label for="telefono">telefono:</label>
        <input type="number" id="telefono" name="telefono" step="0.01" min="0"
        value="<?= $telefono ?>" required>

        <label for="grado">grado:</label>
        <input type="number" id="grado" name="grado" min="0"
        value="<?= $grado ?>" required>

        <type="submit" value="Guardar cambios">
    </form>
</body>
</html>