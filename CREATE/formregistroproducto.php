<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>lector</title>
</head>
<body>
<form action="registroProducto.php" method="post">
<h2>Nuevo lector</h2>
<label for="nombre">Nombre:</label>
<input type="text" id="CI" name="nombre" required>
<label for="telefono">telefono:</label>
<input type="number" id="<CI>" name="telefono" step="0.01" min="0" required>
<label for="grado">grado:</label>
<input type="number" id="CI" name="grado" min="0" required>
<label for="paralelo">paralelo:</label>
<input type="text" id="CI" name="paralelo" required>
<label for="nivel">nivel:</label>
<input type="text" id="CI" name="nivel" required>
<input type="submit" value="Registrar">
</form>
</body>
</html>