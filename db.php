<?php
$host = 'your host';
$dbname = 'your dbname';
$username = 'your username';
$password = 'your password';
$port = "your port"; // Puerto por defecto

try {
    // Crear una nueva conexión PDO con los datos de Railway
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);

    // Configurar el modo de errores de PDO para lanzar excepciones
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /* echo "✅ Conexión exitosa a la base de datos."; */
} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage();
}
