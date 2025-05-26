<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo PHP y HTML</title>
</head>
<body>
    <h1>Ejemplo HTML y PHP</h1>
    <form action="acciones/procesar.php" method="get">
        <label for="txt_nombre">Nombre</label>
        <input type="text" name="txt_nombre" id="txt_nombre">
        <label for="txt_edad">Edad</label>
        <input type="number" name="txt_edad" id="txt_edad">
        <label for="txt_sueldo">Sueldo</label>
        <input type="number" name="txt_sueldo" id="txt_sueldo" step="0.01">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>