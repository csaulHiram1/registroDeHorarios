<!DOCTYPE html>
<html lang="eesn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Horario</title>
</head>

<body>
    <h1>Registro de hora de entrada y salida</h1>

    <form action="procesarDatos.php" method="POST">
        <label for="fecha" id="fecha">Ingresa la fecha</label>
        <input type="date" name="fecha" id="fecha" required>
        <br>

        <label for="entrada" id="entrada">Ingresa la hora de entrada</label>
        <input type="time" name="hora_entrada" id="entrada" required>
        <br>

        <label for="salida" id="salida">Ingresa la hora de salida</label>
        <input type="time" name="hora_salida" id="salida" required>
        <br>

        <input type="submit" value="Enviar">
    </form>

    <h2>Buscar por fecha</h2>
    
    <form action="mostrarInfo.php" method="POST">
        <label for="fechaInicial">Fecha de inicio</label>
        <input type="date" name="fechaInicial" id="fechaInicial" required>
        <br>
        <label for="fechaFinal">Fecha de Término</label>
        <input type="date" name="fechaFinal" id="fechaFinal" required>
        <br>
        <input type="submit" value="Obtener info">
    </form>

</body>

</html>