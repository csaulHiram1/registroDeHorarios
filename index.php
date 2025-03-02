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
        <input type="date" name="fecha" id="fecha">
        <br>

        <label for="entrada" id="entrada">Ingresa la hora de entrada</label>
        <input type="time" name="hora_entrada" id="entrada">
        <br>

        <label for="salida" id="salida">Ingresa la hora de salida</label>
        <input type="time" name="hora_salida" id="salida">
        <br>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>