<?php

require 'db.php';

$error = "faltan_valores";

if (
    !empty($_POST['fecha']) && !empty($_POST['hora_entrada'])
    && !empty($_POST['hora_salida'])
) {

    $error = 'ok';
    $hora_entrada = $_POST['hora_entrada'];
    $hora_salida = $_POST['hora_salida'];
    $fecha = $_POST['fecha'];
    
    subirInformacion($hora_entrada, $hora_salida, $fecha);
} else {
    $error = 'Faltan valores';
}

if ($error != "ok") {
    header("Location:index.php?error=$error"); // Se envía la variable error por el metodo get
}


function subirInformacion($hEntrada, $hSalida, $fecha)
{
    global $pdo;

    try {
        $stmt = $pdo->prepare("INSERT INTO entrada_salida (hora_entrada, hora_salida, fecha) VALUES (?, ?, ?)");

        $stmt->execute([$hEntrada, $hSalida, $fecha]);


    } catch (PDOException $e) {
        echo "❌ Error en la consulta: " . $e->getMessage();
    }
}
