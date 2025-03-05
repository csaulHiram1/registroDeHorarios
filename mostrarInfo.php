<?php
require 'db.php';

if (
    !empty($_POST['fechaInicial']) && !empty($_POST['fechaFinal'])
) {
    $fechaInicial = $_POST['fechaInicial'];
    $fechaFinal = $_POST['fechaFinal'];


    mostrarInfo($fechaInicial, $fechaFinal);
}



function mostrarInfo($fechaInicial,  $fechaFinal)
{
    global $pdo;
  
    try {

        // Preparar la consulta SQL
        $stmt = $pdo->prepare("SELECT * FROM entrada_salida WHERE fecha BETWEEN ? AND ?");
        $stmt->execute([$fechaInicial, $fechaFinal]);

        // Obtener los resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Mostrar los resultados
        foreach ($resultados as $fila) {
            echo "Fecha: " . date("d/m/Y", strtotime($fila['fecha'])) . " | Hora de entrada: " . $fila['hora_entrada'] . " | Hora de salida: " . $fila['hora_salida']. "<hr><br>";
        }
    } catch (PDOException $e) {
        echo "❌ Error en la consulta: " . $e->getMessage();
    }
}
